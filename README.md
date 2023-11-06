| 1. Introduction
----------------
    Package will help you buil a array with $key base on variable name
    Example: 
        1.1 You want to build array with key=>value to pass to a function
            + caculateFee(['fee' => $fee, 'tax' => $tax, 
                            ['revenueProduct' => $revenueProduct, 'revenueSale' => $revenueSale]
                        ]);
        1.2 With MapArr(), you don't need to build array above
        1.3 Using MapArr
            + $mapArr = new MapArr;
            + caculateFee($mapArr->build([$fee, $tax, [$revenueProduct, $revenueSale]])->get());
            + you will get result as step1.1

| 2. Directory Struct
-----------------------

    Root
    |__src
    |   |__Traits       -> support for String.php
    |   |__MapArr.php   -> Main core to build array you need
    |   |__Str.php      -> Handle String
    |
    |
    |__index.php -> example call MapArr()->build()->get()
    |
    |__composer.json - define namespace

-----------------------


| 3. Step by step do it
-----------------------

    3.1 Clone/download MappingArray folder to your computer

    3.2 Goto MappingArray folder > D:\YourFolder\MappingArray

    3.3 Run composer: composer dumpautoload

    3.4 Run file D:\YourFolder\MappingArray\index.php for test
-----------------------

| 4. Guide implement MappingArray
-----------------------

    4.1 Import TrueMe\MapArr class 
        example you have file D:\YourFolder\index2.php
            use TrueMe\MapArr;

    4.2 New TrueMe\MapArr and use it
            D:\YourFolder\index2.php
                + $mapArr = new MapArr;
                + caculateFee($mapArr->build([$fee, $tax, [$revenueProduct, $revenueSale]])->get());

-----------------------

