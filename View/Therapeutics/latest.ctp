
<h1><a href="#">Therapeutics</a></h1>
        
<div class="js-content">
    
    <table class="table-therapeutic">
        <tr>
            <th>Medication</th> 
            <th>Dose</th>
            <th>Sig</th>
            <th>Remarks</th>
        </tr>
        <?php foreach ($patient['Therapeutic'] as $therapeutic): ?>
            <tr>
                <td><?php echo $therapeutic['medication'] ?></td>
                <td><?php echo $therapeutic['dose'] ?></td>
                <td><?php echo $therapeutic['sig'] ?></td>
                <td><?php echo $therapeutic['remarks'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
