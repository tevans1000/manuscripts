<ul>
    {foreach $result as $row}
        <li><ul>
            {foreach $row as $attribute}
                <li>{$attribute@key}: {$attribute}</li>
            {/foreach}
        </ul></li>
    {/foreach}
</ul>