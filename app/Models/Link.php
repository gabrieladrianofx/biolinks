<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(+1);
    }

    /**
     * Function responsible for reorder the link
     *
     * @param [int] $to + 1 for moving down and -1 for moving up
     * @return void
     */
    private function move($to)
    {
        $order = $this->sort;
        $newOrder = $order + $to;

        $user = $this->user;

        $swapWith = $user->links()->where('sort', '=', $newOrder)->first();

        $this->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();

    }
}
