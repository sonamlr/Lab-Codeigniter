<?php
class PendriveRecord extends CI_Controller {

public function index($selectedPendrive = null)
{
    $i = 1;
    $str = null;
    $pendrivename = null;

    // Fetch distinct pendrive names
    $this->db->select('pendrive');
    $this->db->distinct();
    $dd = $this->db->get('pdactivation_detail');

    foreach($dd->result_array() as $pend)
    {
        $pendrivename .= '<option value="'.$pend['pendrive'].'" '.($pend['pendrive'] == $selectedPendrive ? 'selected' : '').'>'.$pend['pendrive'].'</option>';
    }

    $data['pendrivenamelist'] = $pendrivename;

    // Fetch records based on the selected pendrive name
    $record = $this->db->get_where('record_data', array('pendrive_name' => $selectedPendrive));

    foreach($record->result_array() as $val)
    {
        $str .= '<tr>
                    <td>'.$i.'</td>
                    <td>'.$val['pendrive_name'].'</td>
                    <td>'.$val['name'].'</td>
                    <td>'.$val['class'].'</td>
                    <td>'.$val['date_of_access'].'</td>
                    <td>'.$val['time_of_access'].'</td>
                    <td>'.$val['category'].'</td>
                    <td>'.$val['subject'].'</td>
                    <td>'.$val['resource'].'</td>
                    <td>'.$val['resource_name'].'</td>
                    <td>'.$val['duration_of_use'].'</td>
                    <td>'.$val['created_at'].'</td>
                    <td>'.$val['updated_at'].'</td>
                </tr>';
        $i++;
    }

    $data['list'] = $str;

    $this->load->view('site/header');
    $this->load->view('record/recordlist', $data);
    $this->load->view('site/footer');
}
}


<!-- list.html  -->
<!-- Add this line to pre-select the option based on the URL segment -->
<option value='' <?= ($selectedPendrive === null) ? 'selected' : '' ?>>select option</option>

<!-- Update the select dropdown to include the selectedPendrive variable -->
<?php echo $pendrivenamelist;?>

<!-- Add this line to update the JavaScript function -->
<script>
    function GetPendrive(a)
    {
        var url = '<?php echo base_url('PendriveRecord/index/');?>' + a;
        window.location.replace(url);
    }
</script>
                                 