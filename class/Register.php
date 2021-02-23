<?php


class Auth extends DataBase
{
    private $conn;

    /**
     * Register constructor.
     */
    public function __construct()
    {
        $this->conn = $this->getInstance();
    }

    public function createAccount($data)
    {
//        var_dump($data); ///echo or print
        // [1: 'hello', 2: 90, 3: 'buy'] = myarray
        $name = $this->validate(array_search($data['name'], $data), $data['name']);
        $email = $this->validate(array_search($data['email'], $data), $data['email']);
        $password = $this->validate(array_search($data['password'], $data), $data['password']);
        $confirmPassword = $this->validate(array_search($data['confirmPassword'], $data), $data['confirmPassword']);
        $sql = "SELECT * FROM customer WHERE email = '$email'";
        $response = $this->conn->query($sql);
        $response = $response->fetch_assoc();
        if ($response){
            echo json_encode(array(
                'responseCode' => 23,
                'responseMessage' => 'Email already exist.'
            ));
        } elseif ($password !== $confirmPassword){
            echo json_encode(array(
                'responseCode' => 23,
                'responseMessage' => 'Passwords do not match.'
            ));
        }else{
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $date = date('Y-m-d H:i:s');
            $sql = "INSERT INTO customer(customer_name, email, password, created) VALUES ('$name', '$email', '$hash_password', '$date')";
            $this->conn->query($sql);
            if ($this->conn->affected_rows > 0){
                echo json_encode(array(
                    'responseCode' => 0,
                    'responseMessage' => 'You have successfully registered.'
                ));
            }else{
                echo json_encode(array(
                    'responseCode' => 23,
                    'responseMessage' => 'Failed to register.'
                ));
            }
        }
    }

    protected function validate($fieldName, $fieldValue){
        $fieldValue = mysqli_real_escape_string($this->conn, $fieldValue);
        if ($fieldValue !== ''){
            switch ($fieldName){
                case 'gender':
                    if (!filter_var($fieldValue)){
                        echo json_encode(array(
                            'responseCode' => 45,
                            'responseMessage' => $fieldName.' field is invalid'
                        ));
                        exit();
                    }
                    break;
                case 'email':
                    if (!filter_var($fieldValue, FILTER_VALIDATE_EMAIL)) {
                        echo json_encode(array(
                            'responseCode' => 45,
                            'responseMessage' => 'Email field is invalid'
                        ));
                        exit();
                    }
                    break;
                default:
                    if(!filter_var($fieldValue)){
                        echo json_encode(array(
                            'responseCode' => 45,
                            'responseMessage' => $fieldName.' field is invalid'
                        ));
                        exit();
                    };
            }
        }else{
            echo json_encode(array(
                'responseCode' => 45,
                'responseMessage' => $fieldName. ' is required'
            ));
            exit();
        }
        return $fieldValue;
    }

    public function login($data)
    {
        var_dump($data);
    }
}