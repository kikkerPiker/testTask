<?php 
    //подключаем другие нужные файлы
    include('head.php');
    include('navbar.php');

    function bubble_sort(&$arr) // сортировка пуз
    {
        for($i = 0; $i < sizeof($arr); $i++)
        {
            for($j = 0; $j < sizeof($arr)-1; $j++)
            {
                if($arr[$j] > $arr[$j+1])
                {
                    $temp = $arr[$j+1];
                    $arr[$j+1] = $arr[$j];
                    $arr[$j] = $temp; 
                }
            }
        } 

    }

    function selection_sort(&$arr) // сортировка выбором
    {
        for($i = 0; $i < sizeof($arr); $i++)
        {
            $min  = $i;
            for ($j = ($i+ 1) ; $j < sizeof($arr); $j++)
            {
                if($arr[$j] < $arr[$min])
                {
                    $min = $j;
                }
            }

            $temp = $arr[$min];
            $arr[$min] = $arr[$i]; 
            $arr[$i] = $temp;
        } 

    }

    function numb_pairs($arr)
    {
        $arr_no_pairs = array_unique($arr);
        $res = "";
        foreach($arr_no_pairs as $i)
        {
            if(count(array_keys($arr, $i)) > 1) //в задание написано вывести одинаковых пар поэтому проверка 
            {
                $res .= "'$i' = " . count(array_keys($arr, $i)) . '<br>';   
            }
        }
        echo $res;
    }

    if(isset($_GET['but_sort_array']))//  проверяем,что это с той кнопки 
    {
        $value = $_GET['array_textbox']; // получить значение
        $arr = array_map('intval', explode(',', $value)); // str to int array

        bubble_sort($arr); //Есть другие способы,сортировки: selection_sort($arr); or sort($arr);
        numb_pairs($arr); //Есть другие способы,выводит кол-во пар: ///print_r(array_count_values($arr));
        $res = implode(", ",$arr); // arr to str

        echo '<br>' . $res . '<br>'; // print res
    }
    echo '<br>
    <form action="task4.php">
        <input type="text" name="array_textbox"  value = "3,1,1,-4,-2,5,7,12,3,1,5,2,1,7,345,1,32,-1,2-12,-3,-521,63,2,123,5" style="width:70%;"><br><br>
        <input type="submit"name="but_sort_array" value="Send Array"/><br>
    </form>';
?>

