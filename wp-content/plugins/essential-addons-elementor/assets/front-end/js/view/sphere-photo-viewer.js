/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/view/sphere-photo-viewer.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/view/sphere-photo-viewer.js":
/*!********************************************!*\
  !*** ./src/js/view/sphere-photo-viewer.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var SherePhotoViewer = function SherePhotoViewer($scope, $) {\n  var _sphereData$plugins, _sphereData$plugins2, _sphereData$plugins3, _sphereData$plugins4;\n  var sphereData = $scope.find('.eael-sphere-photo-wrapper').data('settings');\n  if ((sphereData === null || sphereData === void 0 || (_sphereData$plugins = sphereData.plugins) === null || _sphereData$plugins === void 0 || (_sphereData$plugins = _sphereData$plugins[0]) === null || _sphereData$plugins === void 0 || (_sphereData$plugins = _sphereData$plugins[0]) === null || _sphereData$plugins === void 0 ? void 0 : _sphereData$plugins.autorotatePitch) !== undefined) {\n    sphereData.plugins[0].unshift(PhotoSphereViewer.AutorotatePlugin);\n  } else if ((sphereData === null || sphereData === void 0 || (_sphereData$plugins2 = sphereData.plugins) === null || _sphereData$plugins2 === void 0 || (_sphereData$plugins2 = _sphereData$plugins2[1]) === null || _sphereData$plugins2 === void 0 || (_sphereData$plugins2 = _sphereData$plugins2[0]) === null || _sphereData$plugins2 === void 0 ? void 0 : _sphereData$plugins2.autorotatePitch) !== undefined) {\n    sphereData.plugins[1].unshift(PhotoSphereViewer.AutorotatePlugin);\n  }\n  if ((sphereData === null || sphereData === void 0 || (_sphereData$plugins3 = sphereData.plugins) === null || _sphereData$plugins3 === void 0 || (_sphereData$plugins3 = _sphereData$plugins3[0]) === null || _sphereData$plugins3 === void 0 || (_sphereData$plugins3 = _sphereData$plugins3[0]) === null || _sphereData$plugins3 === void 0 ? void 0 : _sphereData$plugins3.markers) !== undefined) {\n    sphereData.plugins[0].unshift(PhotoSphereViewer.MarkersPlugin);\n  } else if ((sphereData === null || sphereData === void 0 || (_sphereData$plugins4 = sphereData.plugins) === null || _sphereData$plugins4 === void 0 || (_sphereData$plugins4 = _sphereData$plugins4[1]) === null || _sphereData$plugins4 === void 0 || (_sphereData$plugins4 = _sphereData$plugins4[0]) === null || _sphereData$plugins4 === void 0 ? void 0 : _sphereData$plugins4.markers) !== undefined) {\n    sphereData.plugins[1].unshift(PhotoSphereViewer.MarkersPlugin);\n  }\n  var viewer = new PhotoSphereViewer.Viewer(sphereData);\n};\njQuery(window).on(\"elementor/frontend/init\", function () {\n  elementorFrontend.hooks.addAction(\"frontend/element_ready/eael-sphere-photo-viewer.default\", SherePhotoViewer);\n});\n\n//# sourceURL=webpack:///./src/js/view/sphere-photo-viewer.js?");

/***/ })

/******/ });