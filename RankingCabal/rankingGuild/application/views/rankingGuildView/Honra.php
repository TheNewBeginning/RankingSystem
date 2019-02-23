<?php
$i = 1;
$classCss = NULL;

function checkGuild($guildName){
    return (is_null($guildName)? " - ": $guildName);
}

?>

<div class="content_title">
    <h3 class="ng-binding">Honor Point</h3>
</div>
<div class="leader_table">
    <div class="table_wrap table2">
        <table class="tb_char5" data-ng-init="searchCharacterLeader('honor', 'point_honor', 10)">
            <thead>
                <tr>
                    <th scope="col" class="tb_rank ng-binding">Ranking</th>
                    <th scope="col" class="tb_point ng-binding">Honor Point</th>
                    <th scope="col" class="tb_name ng-binding">Character Name</th>
                    <th scope="col" class="tb_level ng-binding">Lv</th>
                    <th scope="col" class="tb_guild tb_last ng-binding">Guild</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($honra as $r):

                    ?>
                    <?php
                    if ($i <= 3):
                        ?>
                        <tr class="tr_top3">
                            <td class="tb_rank">
                                <span class="ranking ng-binding"><?php echo $i++;?></span>
                            </td>
                            <td class="tb_point">
                                <span class="elps ng-binding"><?php echo number_format($r->Reputation)?></span>
                            </td>
                            <td class="tb_name">
                                <span class="elps" title="<?php echo $r->Name;?>" >
                                    <a style="text-decoration: none;cursor:pointer;" class="ng-binding"><?php echo $r->Name;?></a>
                                </span>
                            </td>
                            <td class="tb_level">
                                <span class="elps ng-binding"><?php echo $r->LEV;?></span>
                            </td>
                            <td class="tb_guild tb_last">
                                <span class="elps" title="<?php echo $r->GuildName;?>"><a style="text-decoration: none;cursor:pointer;" class="ng-binding"><?php echo checkGuild($r->GuildName);?></a>
                                </span>
                            </td>
                        </tr>
                        <?php
                        else:?>
                            <?php 
                            if ($i % 2 == 0) {

                                $classCss = "even";

                            } else {

                                $classCss = " ";

                            }
                            ?>
                            <tr class="<?php echo $classCss;?>">
                                <td class="tb_rank">
                                    <span class="ranking ng-binding"><?php echo $i++;?></span>
                                </td>
                                <td class="tb_point">
                                    <span class="elps ng-binding"><?php echo number_format($r->Reputation)?></span>
                                </td>
                                <td class="tb_name">
                                    <span class="elps" title="<?php echo $r->Name;?>">
                                        <a style="text-decoration: none;cursor:pointer;" class="ng-binding"><?php echo $r->Name;?></a>
                                    </span>
                                </td>
                                <td class="tb_level">
                                    <span class="elps ng-binding"><?php echo $r->LEV;?></span>
                                </td>
                                <td class="tb_guild tb_last">
                                    <span class="elps" title="<?php echo $r->GuildName;?>"><a style="text-decoration: none;cursor:pointer;" class="ng-binding"><?php echo checkGuild($r->GuildName)?></a>
                                    </span>
                                </td>
                            </tr>
                            <?php 
                        endif;
                        ?>   
                        <?php                  
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>