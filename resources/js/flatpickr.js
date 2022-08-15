import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js";


flatpickr("#event_date", {
    "locale": Japanese,
    minDate: "today",
    maxDate: new Date().fp_incr(30) // 14 days from now
});
flatpickr("#start_time", {
    "locale": Japanese
});
flatpickr("#end_time", {
    "locale": Japanese
});
