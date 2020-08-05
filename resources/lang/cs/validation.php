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

    'accepted'             => 'Pole :attribute musí být zaškrtnuto.',
    'active_url'           => 'Pole :attribute není validní URL adresa.',
    'after'                => 'Pole :attribute musi být datum po :date.',
    'after_or_equal'       => 'Pole :attribute musí být datum po :date nebo datum po tomto datu.',
    'alpha'                => 'Pole :attribute může obsahovat jen písmena.',
    'alpha_dash'           => 'Pole :attribute může obsahovat jen písmena, čísla, pomlčky and podtržítka.',
    'alpha_num'            => 'Pole :attribute může obsahovat jen písmena a čísla.',
    'array'                => 'Pole :attribute může obsahovat jen pole.',
    'before'               => 'Pole :attribute musí být datum před :date.',
    'before_or_equal'      => 'Pole :attribute musí být datum před :date nebo datum před tímto datem.',
    'between'              => [
        'numeric' => 'Pole :attribute musí být mezi :min a :max.',
        'file'    => 'Pole :attribute musí být mezi :min a :max kilobyty.',
        'string'  => 'Pole :attribute musí být mezi :min a :max znaky.',
        'array'   => 'Pole :attribute musí mít mezi :min a :max položky.',
    ],
    'boolean'              => 'Pole :attribute musí být typu pravda-nepravda.',
    'confirmed'            => 'Pole :attribute se neshoduje s potvrzením.',
    'date'                 => 'Pole :attribute není platné datum.',
    'date_equals'          => 'Pole :attribute musí být datum :date.',
    'date_format'          => 'Pole :attribute neodpovídá formátu :format.',
    'different'            => 'Pole :attribute se :other musí být odlišné.',
    'digits'               => 'Pole :attribute musí mít :digits číslic.',
    'digits_between'       => 'Pole :attribute musí mít mezi :min a :max číslicemi.',
    'dimensions'           => 'Pole :attribute nemá platný rozměr obrázku.',
    'distinct'             => 'Pole :attribute má duplicitní hodnoty.',
    'email'                => 'Pole :attribute musí být platná emailová adresa.',
    'ends_with'            => 'Pole :attribute musí končit jednou z následujících hodnot: :values',
    'exists'               => 'Vybrané pole :attribute není platné.',
    'file'                 => 'Pole :attribute musí být soubor.',
    'filled'               => 'Pole :attribute musí mít hodnotu.',
    'gt'                   => [
        'numeric' => 'Pole :attribute musí být větší než :value.',
        'file'    => 'Pole :attribute musí být být než :value kilobytů.',
        'string'  => 'Pole :attribute musí mít více než :value znaků.',
        'array'   => 'Pole :attribute musí mít více než :value položek.',
    ],
    'gte'                  => [
        'numeric' => 'Pole :attribute musí být větší než nebo rovno :value.',
        'file'    => 'Pole :attribute musí být větší než nebo rovno :value kilobytů.',
        'string'  => 'Pole :attribute musí být větší než nebo rovno :value znaků.',
        'array'   => 'Pole :attribute musí mít :value položek nebo více.',
    ],
    'image'                => 'Pole :attribute musí být obrázek.',
    'in'                   => 'Vybrané pole :attribute není platné.',
    'in_array'             => 'Pole :attribute neexistuje v :other.',
    'integer'              => 'Pole :attribute musí být celé číslo.',
    'ip'                   => 'Pole :attribute musí být platná IP adresa.',
    'ipv4'                 => 'Pole :attribute musí být platná IPv4 adresa.',
    'ipv6'                 => 'Pole :attribute musí být platná IPv6 adresa.',
    'json'                 => 'Pole :attribute musí být platný JSON řetězec.',
    'lt'                   => [
        'numeric' => 'Pole :attribute musí být menší než :value.',
        'file'    => 'Pole :attribute musí být menší než :value kilobytů.',
        'string'  => 'Pole :attribute musí být menší než :value znaků.',
        'array'   => 'Pole :attribute musí mít méně než :value položek.',
    ],
    'lte'                  => [
        'numeric' => 'Pole :attribute musí být menší nebo rovno než :value.',
        'file'    => 'Pole :attribute musí být menší nebo rovno než :value kilobytů.',
        'string'  => 'Pole :attribute musí být menší nebo rovno než :value znaků.',
        'array'   => 'Pole :attribute nesmí mít více než :value položek.',
    ],
    'max'                  => [
        'numeric' => 'Pole :attribute nesmí být větší než :max.',
        'file'    => 'Pole :attribute nesmí mít více než :max kilobytů.',
        'string'  => 'Pole :attribute nesmí mít více než :max znaků.',
        'array'   => 'Pole :attribute nesmí mít více než :max položek.',
    ],
    'mimes'                => 'Pole :attribute musí být soubor typu: :values.',
    'mimetypes'            => 'Pole :attribute musí být soubor typu: :values.',
    'min'                  => [
        'numeric' => 'Pole :attribute musí být alespoň :min.',
        'file'    => 'Pole :attribute musí mít alespoň :min kilobytů.',
        'string'  => 'Pole :attribute musí mít alespoň :min znaků.',
        'array'   => 'Pole :attribute musí mít alespoň :min položek.',
    ],
    'not_in'               => 'Hodnota pole :attribute je neplatná.',
    'not_regex'            => 'Formát pole :attribute je neplatný.',
    'numeric'              => 'Pole :attribute musí být číslo.',
    'password'             => 'Zadali jste nesprávné heslo.',
    'present'              => 'Pole :attribute musí být přítomné.',
    'regex'                => 'Formát pole :attribute je neplatné.',
    'required'             => 'Pole :attribute je povinné.',
    'required_if'          => 'Pole :attribute je povinné, pokud :other je :value.',
    'required_unless'      => 'Pole :attribute je povinné, pokud :other není v :values.',
    'required_with'        => 'Pole :attribute je povinné, pokud :values je přítomno.',
    'required_with_all'    => 'Pole :attribute je povinné, pokud :values jsou přítomny.',
    'required_without'     => 'Pole :attribute je povinné, pokud :values není přítomen.',
    'required_without_all' => 'Pole :attribute je povinné, pokud žádné z :values nejsou přítomny.',
    'same'                 => 'Pole :attribute a :other musí se shodovat.',
    'size'                 => [
        'numeric' => 'Pole :attribute musí být :size.',
        'file'    => 'Pole :attribute musí mít :size kilobytů.',
        'string'  => 'Pole :attribute musí mít :size znaků.',
        'array'   => 'Pole :attribute musí obsahovat :size položek.',
    ],
    'starts_with'          => 'Pole :attribute musí začínat jednou z následujících hodnot: :values',
    'string'               => 'Pole :attribute musí být řetězec.',
    'timezone'             => 'Pole :attribute musí být platná časová zóna.',
    'unique'               => 'Hodnota pole :attribute je již obsazená.',
    'uploaded'             => 'Pole :attribute se nepodařilo nahrát.',
    'url'                  => 'Formát pole :attribute není platný.',
    'uuid'                 => 'Pole :attribute musí být platný identifikátor UUID.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
