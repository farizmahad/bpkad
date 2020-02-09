
    <section id="section-open_standar_pelayanan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2><?php echo $judul; ?></h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Komponen</th>
                                    <th>Uraian</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no=1;
                            foreach($pelayanan_detail as $pe): ?>
                                <tr>

                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $pe->judul_sub_pelayanan;?></td>
                                    <td style="width:861px;">
                                        <?php echo $pe->desc_sub_pelayanan; ?>
                                    </td>
                                </tr>
                            <?php endforeach;?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
