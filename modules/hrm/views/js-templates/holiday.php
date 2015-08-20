<div class="holiday-form-wrap">

    <div class="row">
        <?php erp_html_form_input( array(
            'label'    => __( 'Holiday Name', 'wp-erp' ),
            'name'     => 'title',
            'id'       => 'erp-hr-holiday-title',
            'value'    => '{{ data.title }}',
            'required' => true,
        ) ); ?>
    </div>

    <div class="row">
        <?php erp_html_form_input( array(
            'label'    => __( 'Start Date', 'wp-erp' ),
            'name'     => 'start_date',
            'value'    => '{{ data.start_date }}',
            'id'       => 'erp-hr-holiday-start',
            'required' => true,
            'class'    => 'erp-leave-date-picker-from',
        ) ); ?>
    </div>

    <div class="row">
        <?php erp_html_form_input( array(
            'label'    => __( 'End Date', 'wp-erp' ),
            'name'     => 'end_date',
            'id'       => 'erp-hr-holiday-end',
            'value'    => '{{ data.end_date }}',
            'required' => true,
            'class'    => 'erp-leave-date-picker-to',
        ) ); ?>
    </div>

    <div class="row">
        <?php erp_html_form_input( array(
            'name'     => 'id',
            'id'       => 'erp-hr-holiday-id',
            'value'    => '{{ data.id }}',
            'type'     => 'hidden',
            
        ) ); ?>
    </div>

    <div class="row">
        <?php erp_html_form_input( array(
            'type'     => 'textarea',
            'label'    => __( 'Description', 'wp-erp' ),
            'name'     => 'description',
            'id'       => 'erp-hr-holiday-description',
            'value'    => '{{ data.description }}',
            'required' => true,
            'class'    => 'erp-hr-leave-holiday-description'
        ) ); ?>
    </div>

    <?php wp_nonce_field( 'erp-leave-holiday' ); ?>
    <input type="hidden" name="action" id="erp-hr-holiday-action" value="erp_hr_holiday_create">
    <input type="hidden" name="holiday_id" value="{{ data.id }}">
</div>