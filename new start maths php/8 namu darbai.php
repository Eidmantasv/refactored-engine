<?php

function tekstas1($kirptas)
{
    echo substr ($kirptas, null ,200) . '<br>' . '<br>';
}

function tekstas2($nekirptas) {
    echo substr($nekirptas, 0);
}

tekstas1('Lorem Ipsum is simply dummy text of the printing typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the s, when an unknown printer took a galley of type scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum');
tekstas2 ('Lorem Ipsum is simply dummy text of the printing typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since thes, when an unknown printer took a galley of type scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum');