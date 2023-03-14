---
title: 'Contact form'
form:
    name: kontakt-form
    fields:
        -
            name: name
            label: Name
            placeholder: 'Your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Your email address'
            type: email
            validate:
                required: true
        -
            name: telefon
            label: Phone
            placeholder: 'Your phone number'
            type: text
            validate:
                required: false
        -
            name: wiadomosc
            label: Message
            placeholder: 'Write to us!'
            type: textarea
            validate:
                required: true
        -
            name: basic-captcha
            type: basic-captcha
            placeholder: 'Enter text'
            label: Antispam
    buttons:
        -
            type: submit
            value: Send
            classes: 'btn btn-lg btn-transp btn-purp'
    process:
        -
            basic-captcha:
                message: 'Invalid characters entered, please try again.'
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
            message: 'Message was sent. Thank you!'
        -
            display: thankyou
process:
    markdown: true
    twig: true
never_cache_twig: true
cache_enable: false
---

