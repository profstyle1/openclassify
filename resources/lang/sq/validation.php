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

    'accepted'             => 'Atributi: duhet të pranohet.',
    'active_url'           => 'Atributi: nuk është URL e vlefshme.',
    'after'                => 'Atributi: duhet të jetë një datë pas: data.',
    'alpha'                => 'Atributi: mund të përmbajë vetëm shkronja.',
    'alpha_dash'           => 'Atributi: mund të përmbajë vetëm shkronja, numra dhe copëza.',
    'alpha_num'            => 'Atributi: mund të përmbajë vetëm shkronja dhe numra.',
    'array'                => 'Atributi: duhet të jetë një varg.',
    'before'               => 'Atributi: duhet të jetë një datë para: data.',
    'between'              => [
        'numeric' => 'Atributi: duhet të jetë midis: min dhe: max.',
        'file'    => 'Atributi: duhet të jetë midis: min dhe: kilobajt maksimal.',
        'string'  => 'Atributi: duhet të jetë midis: min dhe: karaktere max.',
        'array'   => 'Atributi: duhet të ketë midis: min dhe: artikuj maksimalë.',
    ],
    'boolean'              => 'Fusha e atributeve duhet të jetë e vërtetë ose e rreme.',
    'confirmed'            => 'Vërtetimi i atributit nuk përputhet.',
    'date'                 => 'Atributi: nuk është një datë e vlefshme.',
    'date_format'          => 'Atributi: nuk përputhet me formatin: format.',
    'different'            => 'Atributi: dhe tjetri duhet të jenë të ndryshëm.',
    'digits'               => 'Atributi: duhet të jetë: shifra shifra.',
    'digits_between'       => 'Atributi: duhet të jetë midis: min dhe: shifrave maksimale.',
    'dimensions'           => 'Atributi: ka dimensione të pavlefshme të imazhit.',
    'distinct'             => 'Fusha e atributeve ka një vlerë të kopjuar.',
    'email'                => 'Atributi: duhet të jetë një adresë e vlefshme e-mail.',
    'exists'               => 'Cilësia e zgjedhur: atributi është i pavlefshëm.',
    'file'                 => 'Atributi: duhet të jetë një skedar.',
    'filled'               => 'Fusha: atribut kërkohet.',
    'image'                => 'Atributi: duhet të jetë një imazh.',
    'in'                   => 'Cilësia e zgjedhur: atributi është i pavlefshëm.',
    'in_array'             => 'Fusha e atributeve nuk ekziston në: tjetër.',
    'integer'              => 'Atributi: duhet të jetë një numër i plotë.',
    'ip'                   => 'Atributi: duhet të jetë një adresë e vlefshme IP.',
    'json'                 => 'Atributi: duhet të jetë një varg i vlefshëm JSON.',
    'max'                  => [
        'numeric' => 'Atributi: nuk mund të jetë më i madh se: max.',
        'file'    => 'Atributi: nuk mund të jetë më i madh se: kilobajt maksimal.',
        'string'  => 'Atributi: nuk mund të jetë më i madh se: karakteret max.',
        'array'   => 'Atributi: nuk mund të ketë më shumë se: artikuj max.',
    ],
    'mimes'                => 'Atributi: duhet të jetë një skedar i llojit: vlerat.',
    'min'                  => [
        'numeric' => 'Atributi: duhet të jetë së paku: min.',
        'file'    => 'Atributi: duhet të jetë së paku: min kilobajt.',
        'string'  => 'Atributi: duhet të jetë së paku: shkronja min.',
        'array'   => 'Atributi: duhet të ketë së paku: artikuj min.',
    ],
    'not_in'               => 'Cilësia e zgjedhur: atributi është i pavlefshëm.',
    'numeric'              => 'Atributi: duhet të jetë një numër.',
    'present'              => 'Fusha e atributeve duhet të jetë e pranishme.',
    'regex'                => 'Formati i atributit është i pavlefshëm.',
    'required'             => 'Fusha: atribut kërkohet.',
    'required_if'          => 'Fusha: atribut kërkohet kur: tjetër është: vlera.',
    'required_unless'      => 'Fusha: atribut kërkohet përveç nëse: tjetër është në: vlera.',
    'required_with'        => 'Fusha: atribut kërkohet kur: vlerat janë të pranishme.',
    'required_with_all'    => 'Fusha: atribut kërkohet kur: vlerat janë të pranishme.',
    'required_without'     => 'Fusha: atribut kërkohet kur: vlerat nuk janë të pranishme.',
    'required_without_all' => 'Fusha: atribut kërkohet kur asnjë prej: vlerave nuk është e pranishme.',
    'same'                 => 'Atributi: dhe tjetri duhet të përputhen.',
    'size'                 => [
        'numeric' => 'Atributi: duhet të jetë: madhësia.',
        'file'    => 'Atributi: duhet të jetë: kilobajtë me madhësi.',
        'string'  => 'Atributi: duhet të jetë: karakteret e madhësisë.',
        'array'   => 'Atributi: duhet të përmbajë: artikuj me madhësi.',
    ],
    'string'               => 'Atributi: duhet të jetë një varg.',
    'timezone'             => 'Atributi: duhet të jetë një zonë e vlefshme.',
    'unique'               => 'Atributi: tashmë është marrë.',
    'url'                  => 'Formati i atributit është i pavlefshëm.',

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
            'rule-name' => 'custom-mesazh',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
