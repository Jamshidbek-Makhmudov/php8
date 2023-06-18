<?php
declare(strict_types=1);
namespace App\PaymentGeteway\Paddle;

class Transaction
{

private  float $amount;
    public function __construct(float $amount)
    {
       $this-> amount=$amount;
    }

    //classni ichida objectga teng bolgan methodni shu yerni ozida chaqirsa boladi:
    public function copyFrom(Transaction $transaction)

    {
        var_dump($transaction->amount, $transaction->sendEmail());

    }

    public function process()
    {
        echo "Processing paddle transaction " . $this-> amount . " transaction";
        
        $this->generateReceipt();
        $this->sendEmail();

    }



    private function generateReceipt()
    {

    }

    private function sendEmail()
    {
        return true;
    }

}



//self bilan this keywordlarini nima farqi bor?
//staticlarga this bilan murojat qilib bolmaydi chunki this object qaytaradi static esa yoq shuning uchun static metholar bilkan self ishlatish kerak
