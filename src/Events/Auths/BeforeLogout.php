<?php
/**
 * luffy-laravel-tools
 * BeforeLogout.php.
 * @author luffyzhao@vip.126.com
 */

namespace luffyzhao\laravelTools\Events\Auths;

use Illuminate\Queue\SerializesModels;
use luffyzhao\laravelTools\Auths\Redis\RedisTokeSubject;

class BeforeLogout
{
    use SerializesModels;
    protected $user;
    public function __construct(RedisTokeSubject $user)
    {
        $this->user = $user;
    }

}