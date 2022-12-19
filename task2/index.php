<?php
 echo '<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/index.css" />
  </head>

  <body>
    <h1>Таблица истинности PHP</h1>
    <p></p>
    <table>
      <thead>
        <tr>
          <th>
            <strong> A </strong>
          </th>
          <th>
            <strong> B </strong>
          </th>
          <th>
            <strong> !A </strong>
          </th>
          <th>
            <strong> A|| B </strong>
          </th>
          <th>
            <strong> A && B </strong>
          </th>
          <th>
            <strong> A xor B </strong>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>0</td>
          <td>0</td>
          <td>1</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td>0</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>0</td>
          <td>1</td>
        </tr>
        <tr>
          <td>1</td>
          <td>0</td>
          <td>0</td>
          <td>1</td>
          <td>0</td>
          <td>1</td>
        </tr>
        <tr>
          <td>1</td>
          <td>1</td>
          <td>0</td>
          <td>1</td>
          <td>1</td>
          <td>0</td>
        </tr>
      </tbody>
    </table>
    <br>
    <br>
    <br>
    <h1>Таблица сравнения (жесткое)</h1>
    <p></p>
    <table>
      <thead>
        <tr>
          <th>
            <strong> </strong>
          </th>
          <th>
            <strong> true </strong>
          </th>
          <th>
            <strong> false </strong>
          </th>
          <th>
            <strong> 1 </strong>
          </th>
          <th>
            <strong> 0 </strong>
          </th>
          <th>
            <strong> -1 </strong>
          </th>
          <th>
            <strong> "1"</strong>
          </th>
          <th>
            <strong>null</strong>
          </th>
          <th>
            <strong>"php"</strong>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id = left>true</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>1</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left >0</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>-1</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>"1"</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>null</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>"php"</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
        </tr>
      </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <h1>Таблица сравнения (гибкое)</h1>
    <p></p>
    <table>
      <thead>
        <tr>
          <th>
            <strong> </strong>
          </th>
          <th>
            <strong> true </strong>
          </th>
          <th>
            <strong> false </strong>
          </th>
          <th>
            <strong> 1 </strong>
          </th>
          <th>
            <strong> 0 </strong>
          </th>
          <th>
            <strong> -1 </strong>
          </th>
          <th>
            <strong> "1"</strong>
          </th>
          <th>
            <strong>null</strong>
          </th>
          <th>
            <strong>"php"</strong>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id = left>true</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
        </tr>
        <tr>
          <td id = left>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>1</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>0</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>-1</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>"1"</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>null</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
          <td>false</td>
        </tr>
        <tr>
          <td id = left>"php"</td>
          <td>true</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>false</td>
          <td>true</td>
        </tr>
      </tbody>
    </table>

    
  </body>
</html>'
?>

<?php 
echo 'В жестком сравнение преобладает значение "false", в гибком сравнении значений "true" больше,чем в жестком';
?>