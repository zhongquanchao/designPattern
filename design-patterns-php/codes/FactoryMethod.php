<?php
/*
 * 一个用户类，定义了用户的属性和方法
 * 一个用户工厂类，定义了一个静态方法来根据参数返回不同的用户对象
 * 一些测试代码，使用用户工厂类来创建和输出不同角色的用户对象
 * */
// 定义一个用户类
class User {
    private $name;
    private $role;

    public function __construct($name, $role) {
        $this->name = $name;
        $this->role = $role;
    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return $this->role;
    }
}
// 定义一个用户工厂类
class UserFactory {
    // 定义一个静态方法来根据参数返回不同的用户对象
    public static function createUser($name, $role) {
        switch ($role) {
            case 'admin':
                return new User($name, 'admin');
            case 'editor':
                return new User($name, 'editor');
            case 'visitor':
                return new User($name, 'visitor');
            default:
                return null;
        }
    }
}

// 测试代码
$user1 = UserFactory::createUser('xiaochao', 'admin');
$user2 = UserFactory::createUser('zhangsan', 'editor');
$user3 = UserFactory::createUser('lisi', 'visitor');

echo "User1: " . $user1->getName() . ", " . $user1->getRole() . "<br>";
echo "User2: " . $user2->getName() . ", " . $user2->getRole() . "<br>";
echo "User3: " . $user3->getName() . ", " . $user3->getRole() . "<br>";
?>