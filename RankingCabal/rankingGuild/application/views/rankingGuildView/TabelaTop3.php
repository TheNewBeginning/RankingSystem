<?php
<?php

switch ($count) {
	case 1:
		foreach ($guild as $s) :
		
		if ($i == 3) {
			break;
		}
		
		?>
<!-- <div class="table_glb3">
	<table ng-repeat="row in datas.rows.slice(0, 3)"
		ng-if="pagination.pageIndex == 1" class="ng-scope">
		<tbody>
			<tr class="global1">
				<td class="tb_rank">
					<div>
						<span class="ranking ng-binding"><?php echo $i;?></span>
					</div>
				</td>
				<td class="tb_point">
					<div>
						<span class="elps" title="????????"><a
							style="text-decoration: none; cursor: pointer;"
							class="ng-binding"></a><?php echo $s->Point;?> </span>
					</div>
				</td>
				<td class="tb_name">
					<div>
						<span class="cate">Guild:</span><span class="c_info ng-binding"><?php echo $s->GuildName;?></span>
					</div>
				</td>
				<td class="tb_mastery_guild">
					<div>
						<span class="cate">Maestria:</span><span class="c_info ng-binding"
							title="200"><?php echo defineMaestria($g->ExpRank)?></span>
					</div>
				</td>
				<td class="tb_name">
					<div>
						<span class="cate">Poder:</span><span class="c_info ng-binding"
							title="200"><?php echo $s->ExpRank;?></span>
					</div>
				</td>
				<td class="tb_gname">
					<div>
						<span class="cate">Maestria:</span><span class="c_info"><?php ?></span>
					</div>
				</td>
				<td class="tb_class"><div>
						<span class="icon warrior"></span>
					</div></td>
				<td class="tb_nation"><div>
						<span class="ng-binding">CN</span>
					</div></td>
				<!-- <td class="tb_nation"><div><span class="icon {{constant.Nation[row.nation]}}"></span></div></td> -->
			</tr>
		</tbody>
	</table>

<?php
			$i ++;
		endforeach
		;
		break;
}
?>