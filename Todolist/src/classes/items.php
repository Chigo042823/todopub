<?php

namespace Todo\classes;

    class items {

        protected function getItems() {
            return json_decode(file_get_contents('src/data/todo.data.json'), true);
        }

        protected function getItemsById($id) {
            $items = $this->getItems();
            foreach ($items as $item) {
                if ($item['id'] == $id) {
                    return $item;
                }
            }
        }

        protected function editItems($id, $data) {
            $items = $this->getItems();
            foreach ($items as $i => $item) {
                if ($item['id'] == $id) {
                    $items[$i] = array_merge($item, $data);
                }
            }

            $json = json_encode($items);
            file_put_contents('src/data/todo.data.json', $json);
            header('location: index.php');
        }

        protected function deleteItems($id) {
            $items = $this->getItems();
            foreach ($items as $i => $item) {
                if ($item['id'] == $id) {
                    unset($items[$i]);
                }
            }

            $json = json_encode($items);
            file_put_contents('src/data/todo.data.json', $json);
            header('location: index.php');
        }

        protected function addItems($id, $data) {
            $items = $this->getItems();
            array_push($items, $data);
            $json = json_encode($items);
            file_put_contents('src/data/todo.data.json', $json);
            header('location: index.php');
        }

    }