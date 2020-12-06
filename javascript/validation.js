function isDateValid(day, month, year) {
    const dateStr = year + '-' + month + '-' + day;

    return isNaN(Date.parse(dateStr)) ? false : true;
}