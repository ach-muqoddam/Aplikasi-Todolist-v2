<?php 

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService) {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void 
        {
            while(true){
                $this->todolistService->showTodoList();
        
                echo "MENU" . PHP_EOL;
        
                echo "1. Tambah" . PHP_EOL;
                echo "2. Hapus" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;
        
                $pilihan = InputHelper::input("pilih");
        
                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                   $this->removeTodolist();
                }else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak mengerti" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi!!!" . PHP_EOL;
        }

        function addTodolist(): void 
        {
            
        }

        function removeTodolist(): void 
        {
            
        }
    }

}