<?php
<div class="table_wrap table2">
<table class="tb_char7">
<thead>
<tr>
<th scope="col" class="tb_rank ">Posi&ccedil;&atilde;o</th>
<th scope="col" class="tb_point ">Pontos</th>
<th scope="col" class="tb_name ">Nome da Guild</th>
<th scope="col" class="tb_mastery_guild">Maestria G.</th>
<th scope="col" class="tb_name ">Poder da Guild</th>
<th scope="col" class="tb_level ">Level Master</th>
<th scope="col" class="tb_guild ">Nome do Master</th>
<th scope="col" class="tb_class">Classe</th>
</tr>
</thead>
<tbody>
<?php
foreach ($guild as $g) :

if ($i % 2 == 0) {
	$classCss = "even";
} else {
	$classCss = " ";
}
$numeroDaClass = ($g->Style / pow(2, 0) & (pow(2, 3) - 1));
$maestria = definePoderGuild($g->ExpRank);
$iconeClass = defineClass($numeroDaClass);
?>
			
			<tr class="<?php echo $classCss;?>"
				ng-repeat="row in (pagination.pageIndex == 1 ? datas.rows.slice(3, 20) : datas.rows)">
				<td class="tb_rank">
					<div>
						<span class="ranking ng-binding"><?php echo $i++;?></span>
						<!-- <span
							class="vary decrease">2</span> -->
					</div>
				</td>

				<td class="tb_point"><span class="elps ng-binding"><?php echo $g->Point;?></span>
				</td>

				<td class="tb_name"><span class="elps" title="??cC"> <a
						ng-click="selectCharacter(row.server_no, row.character_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->GuildName;?></a>
				</span></td>

				<td class="tb_mastery_guild tb_last_guild">
					<?php echo $maestria;?>
				</td>

				<td class="tb_name"><span class="elps" title="??cC"> <a
						ng-click="selectCharacter(row.server_no, row.character_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->ExpRank;?></a>
				</span></td>

				<td class="tb_level"><span class="elps ng-binding"><?php echo $g->LEV?>
					</span></td>

				<td class="tb_guild"><span class="elps"> <a
						ng-click="selectGuild(row.server_no, row.guild_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->GuildMaster?>
						</a>
				</span></td>

				<td class="tb_class tb_last">
					<?php echo $iconeClass?>
				</td>
			</tr>
		<?php endforeach;?>

		</tbody>
	</table>
</div>