<?php
class Home extends Router{
    public function index() {
        /* 
         * Read HTTP Request Body {JSON Data}
         * > $this->req->body
         * > Example: $this->req->body->firstName
         * 
         * Validate HTTP Request Method 
         * > $this->req->method('post');
         * 
         * Helpers Usage
         * > $obj = $this->helper('helper_name');
         * > $obj->func_name();
         * 
         * 
         * Model Usage
         * > $model = $this->model('DefaultModel');
         * > $model->modelTest();
         */

        // $this->req->method('post');
        $jwt = JWT::encode([
            'memberId' => 1134
        ], 'Developer');
        $decoded = JWT::decode($jwt, 'Developer');

        $this->res->status(200)->json([
            'response' => true,
            'msg' => 'Route -> /Home/index',
            'decode' => $decoded
        ]);

       
    }

    public function test($name) {
        $this->res->status(200)->json([
            'response' => true,
            'msg' => 'Route -> /Home/test/'.$name
        ]);  
    }
}