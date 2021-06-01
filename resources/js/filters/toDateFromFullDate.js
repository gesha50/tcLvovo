export default function toDateFromFullDate(date) {
    let arrayDate = date.split('T0')
    return arrayDate[0].split('-')[2]
}
