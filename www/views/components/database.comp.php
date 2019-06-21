     <table>
        <?php
        $modelName = $database['modelName'];
        $editable = $database['editable'];
        $editable = array_flip($editable);
        unset($database['modelName']);
        unset($database['editable']);

        echo '<form method="GET" id="delete" action="/delete/'.$modelName.'" ></form>';
        $keys = sizeof($database) == 0 ? ["No Data Found"]: array_keys($database[0]);
            echo "<tr>";
            foreach ($keys as $key) {
                echo "<th>".ucwords($key)."</th>";
            }
            echo "</tr>";

            foreach ($database as $element) {
                echo "<tr>";
                echo '<form method="GET" id="edit" action="/edit/'.$modelName .'" >';
                foreach ($element as $key => $value) {
                    if($key == 'id'){
                        echo "<td> <input name='" . $key . "' value='" . $value . "' readonly></td>";
                        continue;
                    }
                    if(isset($editable[$key])) {
                        echo "<td> <input name='" . $key . "' value=" . $value . " ></td>";
                    }
                    else {
                           echo "<td>". $value . "</td>";
                    }
                }
                echo '<td><button type="submit" form="edit">Save</button></td></form>';
                echo '<td><button type="submit" value="'.$element['id'].'" name="id" form="delete">Delete</button></td>';
                echo "</tr>";
            }
        ?>
    </table>

