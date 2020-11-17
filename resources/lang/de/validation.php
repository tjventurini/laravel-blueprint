<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'        => ':attribute muss akzeptiert werden.',
    'active_url'      => ':attribute ist keine gültige URL.',
    'after'           => ':attribute muss ein Datum nach :date sein',
    'after_or_equal'  => ':attribute muss ein Datum nach oder gleich zu :date sein',
    'alpha'           => ':attribute darf nur Buchstaben enthalten.',
    'alpha_dash'      => ':attribute darf nur Buchstaben, Zahlen, Bindestrich und Unterstriche enthalten.',
    'alpha_num'       => ':attribute darf nur Buchstaben und Zahlen enthalten.',
    'array'           => ':attribute muss eine Reihe bilden/sein.',
    'before'          => ':attribute muss ein Datum vor :date sein',
    'before_or_equal' => ':attribute muss ein Datum vor oder gleich :date sein',
    'between'         => [
        'numeric' => 'Der Wert von :attribute muss zwischen :min und :max sein.',
        'file'    => 'Die Datei :attribute muss zwischen :min und :max Kilobytes haben.',
        'string'  => ':attribute muss zwischen :min und :max Zeichen haben.',
        'array'   => ':attribute muss zwischen :min und :max Elemente haben.',
    ],
    'boolean'        => ':attribute field muss wahr oder falsch sein.',
    'confirmed'      => ':attribute confirmation stimmt nicht überein.',
    'date'           => ':attribute ist kein gültiges Datum.',
    'date_equals'    => ':attribute muss ein Datum gleich zu :date sein',
    'date_format'    => ':attribute stimmt nicht mit dem Format :format überein.',
    'different'      => 'Die Felder :attribute und :other müssen unterschiedlich sein.',
    'digits'         => ':attribute muss :digits Ziffern sein.',
    'digits_between' => ':attribute muss zwischen :min und :max Ziffern sein/liegen.',
    'dimensions'     => ':attribute hat/besitzt ungültige Bildabmessungen.',
    'distinct'       => ':attribute field hat/besitzt einen doppelten Wert.',
    'email'          => ':attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with'      => ':attribute muss mit einem der folgenden :values enden.',
    'exists'         => 'Das ausgewählte Feld :attribute ist ungültig.',
    'file'           => ':attribute muss eine Datei sein.',
    'filled'         => ':attribute muss ausgefüllt sein.',
    'gt'             => [
        'numeric' => ':attribute muss größer sein als :value.',
        'file'    => ':attribute muss größer sein als :value Kilobytes.',
        'string'  => ':attribute muss mehr als :value Zeichen haben.',
        'array'   => ':attribute muss mehr als :value Elemente haben.',
    ],
    'gte' => [
        'numeric' => ':attribute muss größer oder gleich sein als :value.',
        'file'    => ':attribute muss größer oder gleich sein als :value Kilobytes.',
        'string'  => ':attribute muss mindestens :value Zeichen haben.',
        'array'   => ':attribute muss mindestens :value Elemente haben.',
    ],
    'image'    => ':attribute muss ein Bild sein.',
    'in'       => 'The selected :attribute ist ungültig.',
    'in_array' => ':attribute field existiert nicht im Feld :other.',
    'integer'  => ':attribute muss eine Zahl sein.',
    'ip'       => ':attribute muss eine gültige IP-Adresse sein.',
    'ipv4'     => ':attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6'     => ':attribute muss eine gültige IPv6-Adresse sein.',
    'json'     => 'The :attribute must be a valid JSON string.',
    'lt'       => [
        'numeric' => ':attribute muss kleiner sein als :value.',
        'file'    => ':attribute muss kleiner sein als :value Kilobytes.',
        'string'  => ':attribute muss weniger als :value Zeichen haben.',
        'array'   => ':attribute muss weniger als :value Elemente haben.',
    ],
    'lte' => [
        'numeric' => ':attribute muss kleiner oder gleich sein als :value.',
        'file'    => ':attribute muss kleiner oder gleich sein als :value Kilobytes.',
        'string'  => ':attribute darf maximal :value Zeichen haben.',
        'array'   => ':attribute darf maximal :value Elemente haben.',
    ],
    'max' => [
        'numeric' => ':attribute muss kleiner oder gleich sein als :max.',
        'file'    => ':attribute muss kleiner oder gleich sein als :max Kilobytes.',
        'string'  => ':attribute darf maximal :max Zeichen haben.',
        'array'   => ':attribute darf maximal :max Elemente haben.',
    ],
    'mimes'     => ':attribute muss eine Datei vom Typ: :values sein.',
    'mimetypes' => ':attribute muss eine Datei vom Typ: :values sein.',
    'min'       => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file'    => ':attribute muss mindestens :min Kilobytes sein.',
        'string'  => ':attribute muss mindestens :min Zeichen haben.',
        'array'   => ':attribute muss mindestens :min Elemente haben.',
    ],
    'multiple_of'          => ':attribute muss ein Vielfaches von :value sein.',
    'not_in'               => 'Das ausgewählte Feld :attribute ist ungültig.',
    'not_regex'            => ':attribute format ist ungültig.',
    'numeric'              => ':attribute muss eine Nummer sein.',
    'password'             => 'Das Passwort ist falsch.',
    'present'              => ':attribute field muss anwesend sein.',
    'required'             => ':attribute wird benötigt.',
    'required_if'          => ':attribute wird benötigt wenn das Feld :other das Feld :value ist.',
    'required_unless'      => ':attribute wird benötigt, es sei denn, das Feld :other ist in :values.',
    'required_with'        => ':attribute wird benötigt, wenn :values vorhanden ist.',
    'required_with_all'    => ':attribute wird benötigt, wenn :values vorhanden sind.',
    'required_without'     => ':attribute wird benötigt wenn :values nicht vorhanden sind.',
    'required_without_all' => ':attribute wird benötigt, wenn keiner der :values vorhanden sind.',
    'same'                 => ':attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'numeric' => ':attribute muss :size sein.',
        'file'    => ':attribute muss :size Kilobytes sein.',
        'string'  => ':attribute muss :size characters sein.',
        'array'   => ':attribute muss :size items enthalten.',
    ],
    'starts_with' => ':attribute muss mit einem der folgenden Felder beginnen: :values.',
    'string'      => ':attribute muss ein String sein.',
    'timezone'    => ':attribute muss eine gültige Zone sein.',
    'unique'      => ':attribute wurde bereits genutzt.',
    'uploaded'    => ':attribute konnte nicht hochgeladen werden.',
    'url'         => ':attribute Format ist ungültig.',
    'uuid'        => ':attribute muss eine gültige UUID sein.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
