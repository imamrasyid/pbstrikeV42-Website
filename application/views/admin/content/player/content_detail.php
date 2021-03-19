<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-hover text-center">
                        <thead>
                            <th colspan="2">INFORMASI UMUM</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="50%">Username</td>
                                <td><?php echo $detail->login ?></td>
                            </tr>
                            <tr>
                                <td>Player ID</td>
                                <td><?php echo $detail->player_id ?></td>
                            </tr>
                            <tr>
                                <td>Nickname</td>
                                <td><?php echo $detail->player_name ?></td>
                            </tr>
                            <tr>
                                <td>Pangkat</td>
                                <td><img src="<?php echo base_url() ?>assets/main/assets/images/img_rank/<?php echo $detail->rank ?>.gif" alt="<?php echo $detail->rank ?>"></td>
                            </tr>
                            <tr>
                                <td>VIP</td>
                                <td><?php echo $detail->pc_cafe ?></td>
                            </tr>
                            <tr>
                                <td>EXP</td>
                                <td><?php echo number_format($detail->exp, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Akses Level</td>
                                <td><?php echo $detail->access_level ?></td>
                            </tr>
                            <tr>
                                <td>IP Terakhir</td>
                                <td><?php echo $detail->lastip ?></td>
                            </tr>
                            <tr>
                                <td>MAC Terakhir</td>
                                <td><?php echo $detail->last_mac ?></td>
                            </tr>
                            <tr>
                                <td>Pertanyaan Hint</td>
                                <td><?php echo $detail->hint_question ?></td>
                            </tr>
                            <tr>
                                <td>Jawaban Hint</td>
                                <td><?php echo $detail->hint_answer ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-hover text-center">
                        <thead>
                            <th colspan="2">INFORMASI MATCH</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Match</td>
                                <td><?php echo number_format($detail->fights, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Win</td>
                                <td><?php echo number_format($detail->fights_win, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Lose</td>
                                <td><?php echo number_format($detail->fights_lost, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Kill</td>
                                <td><?php echo number_format($detail->kills_count, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Death</td>
                                <td><?php echo number_format($detail->deaths_count, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Headshot</td>
                                <td><?php echo number_format($detail->headshots_count, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Kabur</td>
                                <td><?php echo number_format($detail->escapes, '0',',','.') ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless table-hover text-center">
                        <thead>
                            <th colspan="2">Informasi Currency</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Points</td>
                                <td><?php echo number_format($detail->gp, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Cash</td>
                                <td><?php echo number_format($detail->money, '0',',','.') ?></td>
                            </tr>
                            <tr>
                                <td>Coin</td>
                                <td><?php echo number_format($detail->coin, '0',',','.') ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>