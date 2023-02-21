<?php 
	//dat duong dan cho bien $fileLayout de load template vao day
	$this->fileLayout = "Views/Backend/Layout1.php";
 ?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Báo cáo doanh thu</h1>
		<div class="card mb-4">
		<form method="post" name="proreport" action="index.php?area=backend&controller=Cart&action=dtreport">
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>Từ ngày</th>
						<td><input class="form-control" id="fromdate" name="fromdate" type="date" value="" required /></td>
					</tr>
					<tr>
						<th>Đến ngày</th>
						<td><input class="form-control" id="todate" name="todate" type="date" value=""  required /></td>
					</tr>
					<tr>
						<td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button></td>
					</tr>
					</tbody>
				</table>
			</div>
			</form>
		</div>
	</div>
</main>