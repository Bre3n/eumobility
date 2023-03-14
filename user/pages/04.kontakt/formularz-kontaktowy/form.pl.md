---
title: 'Formularz kontaktowy'
form:
    name: kontakt-form
    fields:
        -
            name: name
            label: Imię
            placeholder: 'Twoje imię'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Twój adres email'
            type: email
            validate:
                required: true
        -
            name: telefon
            label: Telefon
            placeholder: 'Twój nr telefonu'
            type: text
            validate:
                required: false
        -
            name: wiadomosc
            label: Wiadomość
            placeholder: 'Napisz do nas'
            type: textarea
            validate:
                required: true
        -
            name: basic-captcha
            type: basic-captcha
            placeholder: 'Wpisz znaki'
            label: Antyspam
    buttons:
        -
            type: submit
            value: Wyślij
            classes: 'btn btn-lg btn-transp btn-purp'
    process:
        -
            basic-captcha:
                message: 'Wpisano niepoprawne znaki, spróbuj jeszcze raz.'
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: '{{ config.plugins.email.to }}'
                subject: 'Formularz z EuMobility.eu {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: kontakt-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Wiadomość została wysłana. Dziękujemy!'
        -
            display: thankyou
process:
    markdown: true
    twig: true
never_cache_twig: true
cache_enable: false
---

