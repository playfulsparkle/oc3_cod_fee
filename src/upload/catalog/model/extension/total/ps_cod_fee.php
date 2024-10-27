<?php
class ModelExtensionTotalPsCodFee extends Model
{
    public function getTotal($total)
    {
        if (
            $this->cart->getSubTotal() > 0 &&
            (float) $this->config->get('total_ps_cod_fee_fee') > 0 &&
            isset($this->session->data['payment_method']) &&
            $this->session->data['payment_method']['code'] === 'cod'
        ) {
            $this->load->language('extension/total/ps_cod_fee');

            $total['totals'][] = array(
                'code' => 'ps_cod_fee',
                'title' => $this->language->get('text_ps_cod_fee'),
                'value' => $this->config->get('total_ps_cod_fee_fee'),
                'sort_order' => $this->config->get('total_ps_cod_fee_sort_order')
            );

            if ($this->config->get('total_ps_cod_fee_tax_class_id')) {
                $tax_rates = $this->tax->getRates($this->config->get('total_ps_cod_fee_fee'), $this->config->get('total_ps_cod_fee_tax_class_id'));

                foreach ($tax_rates as $tax_rate) {
                    if (!isset($total['taxes'][$tax_rate['tax_rate_id']])) {
                        $total['taxes'][$tax_rate['tax_rate_id']] = $tax_rate['amount'];
                    } else {
                        $total['taxes'][$tax_rate['tax_rate_id']] += $tax_rate['amount'];
                    }
                }
            }

            $total['total'] += $this->config->get('total_ps_cod_fee_fee');
        }
    }
}
