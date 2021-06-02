export default function toMonthFullLetters(date) {
    if(date === '01'){
        return 'января'
    }
    if(date === '02'){
        return 'февраля'
    }
    if(date === '03'){
        return 'марта'
    }
    if(date === '04'){
        return 'апреля'
    }
    if(date === '05'){
        return 'мая'
    }
    if(date === '06'){
        return 'июня'
    }
    if(date === '07'){
        return 'июля'
    }
    if(date === '08'){
        return 'августа'
    }
    if(date === '09'){
        return 'сентября'
    }
    if(date === '10'){
        return 'октября'
    }
    if(date === '11'){
        return 'ноября'
    }
    return 'декабря'
}
