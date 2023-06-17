<?php
declare(strict_types=1);
namespace App\PaymentGeteway\Paddle;
//use App\Enums\Status;
class Transaction
{

//    private string $status;

public static int $count=0;

    public function __construct(
        public float $amout,
        public string $description
    )
    {
//        $this->setStatus(Status::PENDING);
    }

    public function process()
    {
        echo "Processing paddle transaction ";

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
