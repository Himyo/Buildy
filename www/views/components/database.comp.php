    <table>
        <?php
        $modelName = $config['modelName'];
        $editable = $config['editable'];
        $editable = array_flip($editable);
        unset($config['modelName']);
        unset($config['editable']);

        echo '<form method="GET" id="delete" action="/delete/'.$modelName.'" ></form>';
        $keys = array_keys($config[0]);
            echo "<tr>";
            foreach ($keys as $key) {
                echo "<th>".ucwords($key)."</th>";
            }
            echo "</tr>";

            foreach ($config as $element) {
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

