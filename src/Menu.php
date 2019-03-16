<?php

use Engine\Database;

class Menu
{
    final public function render(int $parentId = null, string $html = ''): string
    {
        $html .= "<ul>";
        $children = Database::select(
            'SELECT id, name FROM menu WHERE parent_id ' . ($parentId ? '= :parentId' : 'IS NULL'),
            ['parentId' => $parentId]
        );

        if (!empty($children)) {
            foreach ($children as $child) {
                $html .= '<li><strong>' . $child['name'] . '</strong>';
                $html .= $this->render($child['id']);
                $html .= '</li>';
            }
        }

        $html .= '</ul>';

        return $html;
    }
}
