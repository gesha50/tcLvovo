export default function toMonthLetters(date) {
    if(date === '01'){
        return 'янв.'
    }
    if(date === '02'){
        return 'фев.'
    }
    if(date === '03'){
        return 'мар.'
    }
    if(date === '04'){
        return 'апр.'
    }
    if(date === '05'){
        return 'мая'
    }
    if(date === '06'){
        return 'июн.'
    }
    if(date === '07'){
        return 'июл.'
    }
    if(date === '08'){
        return 'авг.'
    }
    if(date === '09'){
        return 'сен.'
    }
    if(date === '10'){
        return 'окт.'
    }
    if(date === '11'){
        return 'нояб.'
    }
    return 'дек.'
}
