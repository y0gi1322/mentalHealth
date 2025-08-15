<?php
/**
 * Plugin Name: DeepSeek Chat Proxy
 * Description: Securely connect Elementor chat to DeepSeek AI via OpenRouter.
 * Version: 1.0
 */

if (!defined('ABSPATH')) exit;

add_action('rest_api_init', function () {
    register_rest_route('deepseek/v1', '/ask', [
        'methods' => 'POST',
        'callback' => 'deepseek_handle_chat',
        'permission_callback' => '__return_true'
    ]);
});

function deepseek_handle_chat(WP_REST_Request $req) {
    $user_msg = sanitize_text_field($req->get_param('message'));
    $history = $req->get_param('history') ?: [];

    if (!$user_msg) return new WP_Error('no_message', 'No message provided', ['status' => 400]);

    $messages = array_merge(
        [
            // ['role' => 'system', 'content' =>
            //     "You are a supportive mental health assistant. Provide coping strategies, emotional support, and educational content. Do not diagnose or replace professional care."
            // ]
            ['role' => 'system', 'content' =>
    "You are a compassionate mental health wellness assistant. Respond with empathy, coping strategies, encouragement, and mental wellness education. Never diagnose. If the user expresses thoughts of self-harm or suicide, remind them to contact professional help immediately."
            ]

        ],
        $history,
        [['role' => 'user', 'content' => $user_msg]]
    );

    $api_key = defined('DEEPSEEK_API_KEY') ? DEEPSEEK_API_KEY : '';
    if (!$api_key) return new WP_Error('no_key', 'API key missing', ['status' => 500]);

    $url = "https://openrouter.ai/api/v1/chat/completions";
    $model = "deepseek/deepseek-chat";

    $response = wp_remote_post($url, [
        'headers' => [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $api_key
        ],
        'body' => wp_json_encode([
            'model' => $model,
            'messages' => $messages,
            'temperature' => 0.7
        ]),
        'timeout' => 30
    ]);

    if (is_wp_error($response)) return new WP_Error('api_error', $response->get_error_message(), ['status' => 500]);

    $body = json_decode(wp_remote_retrieve_body($response), true);
    if (empty($body['choices'][0]['message']['content']))
        return new WP_Error('no_response', 'No response from DeepSeek', ['status' => 500]);

    return [
        'ok' => true,
        'answer' => $body['choices'][0]['message']['content']
    ];
}
