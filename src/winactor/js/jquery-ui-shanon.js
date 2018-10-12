/**
 * setup jquery-ui for SmartSeminar
 */

/**
 * setup datepicker
 */
(function($) {
// datepicker en
$.datepicker.regional.en = {
  buttonText: 'Choose Date',
  closeText: 'Done',
  prevText: 'Prev',
  nextText: 'Next',
  currentText: 'Today',
  monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
  monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  dayNames: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  showMonthAfterYear: false,
  weekHeader: 'Wk',
  dateFormat: 'mm-dd-yy',
  firstDay: 0,
  isRTL: false,
	yearSuffix: ''
};

// datepicker ja
$.datepicker.regional.ja = {
  buttonText: '日付選択',
  closeText: '完了',
  prevText: '前',
  nextText: '次',
  currentText: '今日',
  monthNames: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
  monthNamesShort: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
  dayNames: ['日', '月', '火', '水', '木', '金', '土'],
  dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
  dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
  showMonthAfterYear: true,
  weekHeader: 'Wk',
  dateFormat: 'yy-mm-dd',
  firstDay: 0,
  isRTL: false,
  yearSuffix: ''
};

// datepicker common
$.datepicker.setDefaults($.extend({
  showOn: 'focus', // 'focus' for popup on focus, 'button' for trigger button, or 'both' for either
  showAnim: 'fadeIn', // Name of jQuery animation for popup
  showOptions: {}, // Options for enhanced animations
  defaultDate: null, // Used when field is blank: actual date, +/-number for offset from today, null for today
  appendText: '', // Display text following the input box, e.g. showing the format
  buttonText: '...', // Text for trigger button
  buttonImage: '', // URL for trigger button image
  buttonImageOnly: false, // True if the image appears alone, false if it appears on a button
  hideIfNoPrevNext: false, // True to hide next/previous month links if not applicable, false to just disable them
  navigationAsDateFormat: false, // True if date formatting applied to prev/today/next links
  gotoCurrent: false, // True if today link goes back to current selection instead
  changeMonth: true, // True if month can be selected directly, false if only prev/next
  changeYear: true, // True if year can be selected directly, false if only prev/next
  yearRange: '1902:2037', // Range of years to display in drop-down,
    // either relative to today's year (-nn:+nn), relative to currently displayed year
    // (c-nn:c+nn), absolute (nnnn:nnnn), or a combination of the above (nnnn:-n)
  showOtherMonths: true, // True to show dates in other months, false to leave blank
  selectOtherMonths: false, // True to allow selection of dates in other months, false for unselectable
  showWeek: false, // True to show week of the year, false to not show it
  calculateWeek: this.iso8601Week, // How to calculate the week of the year, takes a Date and returns the number of the week for it
  shortYearCutoff: '+10', // Short year values < this are in the current century, > this are in the previous century, string value starting with '+' for current year + value
  minDate: null, // The earliest selectable date, or null for no limit
  maxDate: null, // The latest selectable date, or null for no limit
  duration: 'fast', // Duration of display/closure
  beforeShowDay: null, // Function that takes a date and returns an array with
    // [0] = true if selectable, false if not, [1] = custom CSS class name(s) or '',
    // [2] = cell title (optional), e.g. $.datepicker.noWeekends
  beforeShow: null, // Function that takes an input field and returns a set of custom settings for the date picker
  onSelect: null, // Define a callback function when a date is selected
  onChangeMonthYear: null, // Define a callback function when the month or year is changed
  onClose: null, // Define a callback function when the datepicker is closed
  numberOfMonths: 1, // Number of months to show at a time
  showCurrentAtPos: 0, // The position in multipe months at which to show the current month (starting at 0)
  stepMonths: 1, // Number of months to step back/forward
  stepBigMonths: 12, // Number of months to step back/forward for the big links
  altField: '', // Selector for an alternate field to store selected dates into
  altFormat: '', // The date format to use for the alternate field
  constrainInput: true, // The input is constrained by the current date format
  showButtonPanel: false, // True to show button panel, false to not show it
  autoSize: false // True to size the input for the date format, false to leave as is
}, $.datepicker.regional.ja));  // ja

// timepicker en
$.timepicker.regional.en = {
  currentText: 'Now',
  closeText: 'Done',
  ampm: false,
  timeFormat: 'hh:mm tt',
  timeOnlyTitle: 'Choose Time',
  timeText: 'Time',
  hourText: 'Hour',
  minuteText: 'Minute',
  secondText: 'Second'
};

// timepicker ja
$.timepicker.regional.ja = {
  currentText: '今',
  closeText: '完了',
  ampm: false,
  timeFormat: 'hh:mm tt',
  timeOnlyTitle: '時刻選択',
  timeText: '時刻',
  hourText: '時',
  minuteText: '分',
  secondText: '秒'
};

// datepicker common
$.timepicker.setDefaults($.extend({
  showButtonPanel: true,
  timeOnly: false,
  showHour: true,
  showMinute: true,
  showSecond: false,
  showTime: true,
  stepHour: 0.05,
  stepMinute: 0.05,
  stepSecond: 0.05,
  hour: 0,
  minute: 0,
  second: 0,
  hourMin: 0,
  minuteMin: 0,
  secondMin: 0,
  hourMax: 23,
  minuteMax: 59,
  secondMax: 59,
  hourGrid: 0,
  minuteGrid: 0,
  secondGrid: 0,
  alwaysSetTime: true
}, $.timepicker.regional.ja));  // ja

// get holidays from google calendar
if (typeof GCalHolidays != 'undefined') {
  $.datepicker.setDefaults({
    beforeShow: function(input, inst) {
      var date = $(input).datepicker("getDate") || new Date();
      GCalHolidays.$datepicker(date.getFullYear(), date.getMonth() + 1, inst);
    },
    onChangeMonthYear: GCalHolidays.$datepicker
  });

  $.extend(GCalHolidays, GCalHolidays.regional['ja']);
}

})(jQuery);
