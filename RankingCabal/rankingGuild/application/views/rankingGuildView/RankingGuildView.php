<?php
function defineClass($cl){
	switch ($cl){
		case 1:
			return '<span class="icon warrior"></span>';
			break;
		case 2:
			return '<span class="icon blader"></span>';
			break;
		case 3:
			return '<span class="icon wizard"></span>';
			break;
		case 4:
			return '<span class="icon farcher"></span>';
			break;
		case 5:
			return '<span class="icon fshielder"></span>';
			break;
		case 6:
			return '<span class="icon fblader"></span>';
			break;
		default:
			return '<span class=" "></span>';
	}
}

?>


<div class="table_glb3">
	<!-- ngRepeat: row in datas.rows.slice(0, 3) -->
	<!-- ngIf: pagination.pageIndex == 1 -->
	<table class="ng-scope">
		<tbody>
			<tr class="global1">
				<td class="tb_rank">
					<div>
						<span class="ranking ">1</span> <span
							class="vary nochange">0</span>
					</div>
				</td>
				<td class="tb_name">
					<div>
						<span class="elps" title="????????"> <a
							style="text-decoration: none; cursor: pointer;"
							class="ng-binding">????????</a>
						</span>
					</div>
				</td>

				<td class="tb_point">
					<div>
						<span class="cate">Score</span> <span class="c_info"
							title="183,378">183,378</span>
					</div>
				</td>
				<td class="tb_level">
					<div>
						<span class="cate">Lv</span> <span class="c_info "
							title="200">200</span>
					</div>
				</td>

				<td class="tb_gname">
					<div>
						<span class="cate">Guild</span> <span class="c_info"
							title="Thesky??????"> <a
							style="text-decoration: none; cursor: pointer;"
							class="">Thesky??????</a>
						</span>
					</div>
				</td>
				<td class="tb_nation"><div>
						<span class="icon warrior"></span>
					</div></td>

			</tr>
		</tbody>
	</table>
</div>
<div class="table_wrap table2">
	<table class="tb_char7">
		<thead>
			<tr>
				<th scope="col" class="tb_rank ">Posi&ccedil;&atilde;o</th>
				<th scope="col" class="tb_point ">Pontos</th>
				<th scope="col" class="tb_name ">Nome da Guild</th>
				<th scope="col" class="tb_level ">Maestria G.</th>
				<th scope="col" class="tb_level ">Level Master</th>
				<th scope="col" class="tb_guild ">Nome do Master</th>
				<th scope="col" class="tb_class">Classe</th>
			</tr>
		</thead>
		<tbody>
		<?php
		// Inicializando variavel i
		$i = 1;
		// Muda as Cores das tuplas
		$classCss;
		// Pega o Style do char
		$numeroDaClass="";
		//
		$maestria="";
		foreach ($guild as $g) :
			
			if ($i % 2 == 0) {
				$classCss = "even";
			} else {
				$classCss = " ";
			}
			$numeroDaClass = ($g->Style / pow(2, 0) & (pow(2, 3) - 1));
			$iconeClass = defineClass($numeroDaClass);
			if($g->ExpRank<15000){
				$maestria = base_url("assets/resources/images/m1.png");
			}
			?>
			
			<tr class="<?php echo $classCss?>"
				ng-repeat="row in (pagination.pageIndex == 1 ? datas.rows.slice(3, 20) : datas.rows)">
				<td class="tb_rank">
					<div>
						<span class="ranking ng-binding"><?php echo $i++?></span> <span
							class="vary decrease">2</span>
					</div>
				</td>

				<td class="tb_point"><span class="elps ng-binding"><?php echo $g->Point?></span>
				</td>

				<td class="tb_name"><span class="elps" title="??cC"> <a
						ng-click="selectCharacter(row.server_no, row.character_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->GuildName?></a>
				</span></td>

				<td class="tb_mastery_guild tb_last_guild">
					<span class="icon m1"></span>
				</td>

				<td class="tb_level">
					<span class="elps ng-binding"><?php echo $g->LEV?>
					</span>
				</td>
				
				<td class="tb_guild">
					<span class="elps"><a
						ng-click="selectGuild(row.server_no, row.guild_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->GuildMaster?></a> 
					</span>
				</td>

				<td class="tb_class tb_last">
					<?php echo $iconeClass?>
				</td>
			</tr>
		<?php endforeach;?>

		</tbody>
	</table>
</div>