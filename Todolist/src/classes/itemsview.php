<?php

namespace Todo\classes;

    class itemsview extends items{
        public function listItems() {
            $items = $this->getItems();
            return $items;
        }

        public function editItem($id) {
            $item = $this->getItemsById($id);
            return $item;
        }
    }