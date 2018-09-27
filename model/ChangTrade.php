<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/26/18
 * Time: 10:00 AM
 */

namespace Model;

use PDO;

class ChangTrade
{
    public $connection;

    /**
     * ChangDatabase constructor.
     */

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return array
     */

    public function getAll()
    {
        $sql = "SELECT * FROM histories";
        $query = $this->connection->query($sql);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    /**
     * @param $user
     * @param $password
     */

    public function login($user, $password)
    {
        $sql = "SELECT * FROM login	 WHERE `user` = '$user' and password = '$password'";
        $query = $this->connection->query($sql);
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($categories as $category) {
            if ($category['user'] == "$user" && "$password" == $category['password']) {
                header('Location: http://localhost:8888/WebPHP/Translection/index.php?page=view');
            } else {
                header("Location: HTTP/1.1 401 Unauthorized");
            }
        }
    }

    /**
     * @param $targetId
     * @param $sourceId
     * @param $Account
     * @param $Message
     */

    public function transferEmployeePosition($targetId,$sourceId,$Account,$Message) {
        $sql = "SELECT banance	 FROM users WHERE id = ?";
        $query = $this->connection->prepare($sql);
        $query->execute([$targetId]);
        $availableAmount = (int) $query->fetchColumn();


        if($availableAmount <  $Account) {
            echo "số tiền của bạn không đủ ";
            $success =  " Thất bại ";
        }else {

            $sqlUpdateTargetId = "UPDATE `users` SET banance = banance - ? WHERE id = ?";
            $query = $this->connection->prepare($sqlUpdateTargetId);
            $query->execute([$Account, $targetId]);


            $sqlUpdateSourceId = "UPDATE `users` SET banance = banance + ? WHERE id = ?";
            $query = $this->connection->prepare($sqlUpdateSourceId);
            $query->execute([$Account, $sourceId]);
            $success = " Thành Công";
        }
        $sql = "INSERT INTO `histories`(`id_user_nhan`, `id_user_gui`, `content`, `success`, `account`) VALUES (?,?,?,?,?)";
        $query = $this->connection->prepare($sql);
        $query->execute([$sourceId, $targetId, "$Message", "$success", "$Account"]);
    }
}