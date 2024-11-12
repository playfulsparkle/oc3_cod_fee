<?php
class ControllerExtensionTotalPsCodFee extends Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc3_cod_fee.git';

    private $error = array();

    public function index()
    {
        $this->load->language('extension/total/ps_cod_fee');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('total_ps_cod_fee', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/total/ps_cod_fee', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/total/ps_cod_fee', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true);

        if (isset($this->request->post['total_ps_cod_fee_fee'])) {
            $data['total_ps_cod_fee_fee'] = (float) $this->request->post['total_ps_cod_fee_fee'];
        } else {
            $data['total_ps_cod_fee_fee'] = (float) $this->config->get('total_ps_cod_fee_fee');
        }

        if (isset($this->request->post['total_ps_cod_fee_tax_class_id'])) {
            $data['total_ps_cod_fee_tax_class_id'] = (int) $this->request->post['total_ps_cod_fee_tax_class_id'];
        } else {
            $data['total_ps_cod_fee_tax_class_id'] = (int) $this->config->get('total_ps_cod_fee_tax_class_id');
        }

        $this->load->model('localisation/tax_class');

        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

        if (isset($this->request->post['total_ps_cod_fee_status'])) {
            $data['total_ps_cod_fee_status'] = (bool) $this->request->post['total_ps_cod_fee_status'];
        } else {
            $data['total_ps_cod_fee_status'] = (bool) $this->config->get('total_ps_cod_fee_status');
        }

        if (isset($this->request->post['total_ps_cod_fee_sort_order'])) {
            $data['total_ps_cod_fee_sort_order'] = (int) $this->request->post['total_ps_cod_fee_sort_order'];
        } else {
            $data['total_ps_cod_fee_sort_order'] = (int) $this->config->get('total_ps_cod_fee_sort_order');
        }

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/total/ps_cod_fee', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/total/ps_cod_fee')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->error && isset($this->request->post['total_ps_cod_fee_fee']) && (float) $this->request->post['total_ps_cod_fee_fee'] <= 0) {
            $this->error['warning'] = $this->language->get('error_total_ps_cod_fee_fee');
        }

        return !$this->error;
    }
}
