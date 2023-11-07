| 1. Introduction
----------------
    Package will help you buil list functions global are used usually  
    Example: 
        1.1 Arrays & Objects
            Arr::add
            Arr::collapse
            Arr::crossJoin
            Arr::divide
            Arr::dot
            Arr::except
            Arr::first
            Arr::flatten
            Arr::forget
            Arr::get
            Arr::has
            Arr::isAssoc
            Arr::last
            Arr::only
            Arr::pluck
            Arr::prepend
            Arr::pull
            Arr::random
            Arr::query
            Arr::set
            Arr::shuffle
            Arr::sort
            Arr::sortRecursive
            Arr::where
            Arr::wrap
            data_fill
            data_get
            data_set
            head
            last

        1.2 String
            __
            class_basename
            e
            preg_replace_array
            Str::after
            Str::afterLast
            Str::before
            Str::beforeLast
            Str::camel
            Str::contains
            Str::containsAll
            Str::endsWith
            Str::finish
            Str::is
            Str::isUuid
            Str::kebab
            Str::limit
            Str::orderedUuid
            Str::plural
            Str::random
            Str::replaceArray
            Str::replaceFirst
            Str::replaceLast
            Str::singular
            Str::slug
            Str::snake
            Str::start
            Str::startsWith
            Str::studly
            Str::title
            Str::ucfirst
            Str::upper
            Str::uuid
            Str::words
            trans
            trans_choice


| 2. Directory Struct
-----------------------

    Root
    |__src
    |   |__Contracts    -> define interface
    |   |__Support      -> Base class
    |       |__helpers.php      -> global functions
    |
    |
    |__index.php -> example call append_config([1,2]);
    |
    |__composer.json - define namespace

-----------------------


| 3. Step by step do it
-----------------------

    3.1 Clone/download Helpers folder to your computer
        3.1.1 Download from browser
            3.1.1.1 Goto Helpers folder > D:\YourFolder\Helpers
            3.1.1.2 Run composer: composer dumpautoload
            3.1.1.3 Run file D:\YourFolder\Helpers\index.php for test


        3.1.2 Download = composer file
            + create new Folder: D:\YourFolder\Helpers on your computer
            + Goto D:\YourFolder\Helpers folder, you download-by-composer\composer.json 
                    and download this file to D:\YourFolder\Helpers
            + open terminal at composer.json file position above (D:\YourFolder\Helpers)
            + run: composer install

            3.1.2.1 Goto Helpers folder > D:\YourFolder\Helpers
            3.1.2.2 Go to D:\YourFolder\Helpers\vendor\trueme\helpers\index.php copy to 
                        D:\YourFolder\Helpers folder
            3.1.2.3 Run file D:\YourFolder\Helpers\index.php for test


-----------------------

