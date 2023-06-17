<?php
declare(strict_types=1);
namespace App\PaymentGeteway\Paddle;

class Transaction
{

public float $amount;
    public function __construct(float $amount)
    {
       $this-> amount=$amount;
    }

    public function process()
    {
        echo "Processing paddle transaction " . $this-> amount . " transaction";

    }

//    public function setStatus(string $status):self
//    {
//        if(!isset(Status::ALL_STATUSES[$status])){
//            throw new \InvalidArgumentException('Invalid status');
//        }
//        $this-> status=$status;
//        return $this;
//    }

}



//self bilan this keywordlarini nima farqi bor?
//staticlarga this bilan murojat qilib bolmaydi chunki this object qaytaradi static esa yoq shuning uchun static metholar bilkan self ishlatish kerak
