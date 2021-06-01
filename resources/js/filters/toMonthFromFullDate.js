export default function toMonthFromFullDate(date) {
    let arrayDate = date.split('T0')
    return arrayDate[0].split('-')[1]
}
