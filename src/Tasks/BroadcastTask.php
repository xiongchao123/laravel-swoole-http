<?php

namespace HuangYi\Swoole\Tasks;

class BroadcastTask extends TaskAbstract
{
    /**
     * Broadcast task handler.
     *
     * @param \Swoole\Server $server
     * @param int $taskId
     * @param int $srcWorkerId
     * @return void
     */
    public function handle($server, $taskId, $srcWorkerId)
    {
        $clients = array_get($this->data, 'clients', $server->connections);

        foreach ($clients as $socketId) {
            if ($server->exist($socketId)) {
                $server->push($socketId, $this->data['message']);
            }
        }
    }
}
