<?php 
/*
  *
  * 首先，定义了一个策略接口 Strategy，它有一个抽象方法 doOperation，用于执行不同的算法。
  * 然后，定义了三个具体策略类 AddStrategy、SubtractStrategy 和 MultiplyStrategy，它们都实现了 Strategy 接口，并重写了 doOperation 方法，分别实现了加法、减法和乘法的算法。
  * 接着，定义了一个上下文类 Context，它有一个私有属性 strategy，用于保存具体策略对象的引用。它还有一个构造函数，用于传入具体策略对象，并赋值给 strategy 属性。它还有一个公共方法 executeStrategy，用于调用 strategy 对象的 doOperation 方法，并返回结果。
  * 最后，在测试代码中，创建了不同的具体策略对象，并传入 Context 类的构造函数中，创建了不同的上下文对象。然后调用上下文对象的 executeStrategy 方法，并传入两个数字作为参数，得到不同的算法结果。
  */
// 定义策略接口
interface Strategy {
    public function doOperation($num1, $num2);
}

// 定义具体策略类
class AddStrategy implements Strategy {
    public function doOperation($num1, $num2) {
        return $num1 + $num2;
    }
}

class SubtractStrategy implements Strategy {
    public function doOperation($num1, $num2) {
        return $num1 - $num2;
    }
}

class MultiplyStrategy implements Strategy {
    public function doOperation($num1, $num2) {
        return $num1 * $num2;
    }
}

// 定义上下文类
class Context {
    private $strategy;

    // 构造函数，传入具体策略对象
    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    }

    // 调用策略对象的方法
    public function executeStrategy($num1, $num2) {
        return $this->strategy->doOperation($num1, $num2);
    }
}

// 测试代码
$context = new Context(new AddStrategy());
echo "10 + 5 = " . $context->executeStrategy(10, 5) . "<br>";

$context = new Context(new SubtractStrategy());
echo "10 - 5 = " . $context->executeStrategy(10, 5) . "<br>";

$context = new Context(new MultiplyStrategy());
echo "10 * 5 = " . $context->executeStrategy(10, 5) . "<br>";










