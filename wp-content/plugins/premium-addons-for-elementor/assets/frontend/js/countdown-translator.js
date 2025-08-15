/**
 * LanguageObject.js
 *
 * A language manager for handling translation.
 *
 */
(function ($) {
	// "use strict";

	var LanguageObject = {
		// Language packs
		Lang: {
			danish: {
				'years': 'År',
				'months': 'Måneder',
				'days': 'Dage',
				'hours': 'Timer',
				'minutes': 'Minutter',
				'seconds': 'Sekunder'
			},
			german: {
				'years': 'Jahre',
				'months': 'Monate',
				'days': 'Tage',
				'hours': 'Stunden',
				'minutes': 'Minuten',
				'seconds': 'Sekunden'
			},
			english: {
				'years': 'Years',
				'months': 'Months',
				'days': 'Days',
				'hours': 'Hours',
				'minutes': 'Minutes',
				'seconds': 'Seconds'
			},
			spanish: {
				'years': 'Años',
				'months': 'Meses',
				'days': 'DÍas',
				'hours': 'Horas',
				'minutes': 'Minutos',
				'seconds': 'Segundo'
			},
			finnish: {
				'years': 'Vuotta',
				'months': 'Kuukautta',
				'days': 'Päivää',
				'hours': 'Tuntia',
				'minutes': 'Minuuttia',
				'seconds': 'Sekuntia'
			},
			french: {
				'years': 'Ans',
				'months': 'Mois',
				'days': 'Jours',
				'hours': 'Heures',
				'minutes': 'Minutes',
				'seconds': 'Secondes'
			},
			italian: {
				'years': 'Anni',
				'months': 'Mesi',
				'days': 'Giorni',
				'hours': 'Ore',
				'minutes': 'Minuti',
				'seconds': 'Secondi'
			},
			arabic: {
				'years': 'سنوات',
				'months': 'شهور',
				'days': 'أيام',
				'hours': 'ساعات',
				'minutes': 'دقائق',
				'seconds': 'ثواني'
			},
			latvian: {
				'years': 'Gadi',
				'months': 'Mēneši',
				'days': 'Dienas',
				'hours': 'Stundas',
				'minutes': 'Minūtes',
				'seconds': 'Sekundes'
			},
			dutch: {
				'years': 'Jaren',
				'months': 'Maanden',
				'days': 'Dagen',
				'hours': 'Uren',
				'minutes': 'Minuten',
				'seconds': 'Seconden'
			},
			norwegian: {
				'years': 'År',
				'months': 'Måneder',
				'days': 'Dager',
				'hours': 'Timer',
				'minutes': 'Minutter',
				'seconds': 'Sekunder'
			},
			portuguese: {
				'years': 'Anos',
				'months': 'Meses',
				'days': 'Dias',
				'hours': 'Horas',
				'minutes': 'Minutos',
				'seconds': 'Segundos'
			},
			russian: {
				'years': 'лет',
				'months': 'месяцев',
				'days': 'дней',
				'hours': 'часов',
				'minutes': 'минут',
				'seconds': 'секунд'
			},
			swedish: {
				'years': 'År',
				'months': 'Månader',
				'days': 'Dagar',
				'hours': 'Timmar',
				'minutes': 'Minuter',
				'seconds': 'Sekunder'
			},
			hebrew: {
				'years': 'שנים',
				'months': 'חודשים',
				'days': 'ימים',
				'hours': 'שעות',
				'minutes': 'דקות',
				'seconds': 'שניות'
			},
			korean: {
				'years': '년',
				'months': '월',
				'days': '일',
				'hours': '시',
				'minutes': '분',
				'seconds': '초'
			},
			czech: {
				'years': 'Roky',
				'months': 'Měsíce',
				'days': 'Dny',
				'hours': 'Hodiny',
				'minutes': 'Minuty',
				'seconds': 'Sekundy'
			},
			persian: {
				'years': 'سال',
				'months': 'ماه',
				'days': 'روز',
				'hours': 'ساعت',
				'minutes': 'دقیقه',
				'seconds': 'ثانیه'
			},
			japanese: {
				'years': '年',
				'months': '月',
				'days': '日',
				'hours': '時',
				'minutes': '分',
				'seconds': '秒'
			},
			polish: {
				'years': 'Lat',
				'months': 'Miesięcy',
				'days': 'Dni',
				'hours': 'Godziny',
				'minutes': 'Minuty',
				'seconds': 'Sekundy'
			},
			romanian: {
				'years': 'ani',
				'months': 'luni',
				'days': 'zile',
				'hours': 'ore',
				'minutes': 'minute',
				'seconds': 'secunde'
			},
			slovak: {
				'years': 'Roky',
				'months': 'Mesiace',
				'days': 'Dni',
				'hours': 'Hodiny',
				'minutes': 'Minúty',
				'seconds': 'Sekundy'
			},
			thai: {
				'years': 'ปี',
				'months': 'เดือน',
				'days': 'วัน',
				'hours': 'ชั่วโมง',
				'minutes': 'นาที',
				'seconds': 'วินาที'
			},
			turkish: {
				'years': 'Yıl',
				'months': 'Ay',
				'days': 'Gün',
				'hours': 'Saat',
				'minutes': 'Dakika',
				'seconds': 'Saniye'
			},
			chinese: {
				'years': '年',
				'months': '月',
				'days': '日',
				'hours': '时',
				'minutes': '分',
				'seconds': '秒'
			},
		},

		// Localize a string
		localize: function (lang, type) {

			var langKey = this.Lang[lang] || this.Lang.english,
				// Flip clock uses only these labels
				labels;
			if (type === 'flip') {
				labels = ['days', 'hours', 'minutes', 'seconds'];
			} else {
				labels = ['years', 'months', 'days', 'hours', 'minutes', 'seconds'];
			}

			var newlabel = labels.map(function (label) {
				var translation = langKey[label] || label;
				return translation
			});

			return newlabel;
		},


	};

	// Expose LanguageObject globally
	window.LanguageObject = LanguageObject;

}(jQuery));
