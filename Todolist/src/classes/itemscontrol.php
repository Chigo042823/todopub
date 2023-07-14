<?php

namespace Todo\classes;

    class itemscontrol extends items{

        public function editItem($id, $data) {
            $this->editItems($id, $data);
        }

        public function deleteItem($id) {
            $this->deleteItems($id);
        }

        public function addItem($id, $data) {
            $this->addItems($id, $data);
        }
    }