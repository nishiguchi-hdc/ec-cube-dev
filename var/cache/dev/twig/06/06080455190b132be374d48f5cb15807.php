<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* EccubePaymentLite42/Resource/template/admin/Regular/Order/confirmationModal_js.twig */
class __TwigTemplate_5625de6608f4653921e61cb4394e8c23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Order/confirmationModal_js.twig"));

        $__eccube__gblobal = $this->env->getGlobals();
        $__eccube__eventDispatcher = $__eccube__gblobal['event_dispatcher'];
        $__eccube__source = $this->env->getLoader()->getSourceContext($this->getTemplateName())->getCode();
        $__eccube__event = new \Eccube\Event\TemplateEvent($this->getTemplateName(), $__eccube__source, $context);
        $__eccube__eventDispatcher->dispatch($__eccube__event, $this->getTemplateName());
        $context = $__eccube__event->getParameters();
        if ($__eccube__event->getSource() !== $__eccube__source) {
            $__eccube__newTemplate = $this->env->createTemplate($__eccube__event->getSource());
            $__eccube__newTemplate->display($__eccube__event->getParameters());
            return;
        }

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Regular/Order/confirmationModal_js.twig"));

        // line 1
        echo "<script>
    \$(function() {
        ";
        // line 4
        echo "        toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
        \$('input[id^=\"check_\"]').on('change', function() {
            \$('#toggle_check_all').prop('checked', false);
            toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
        });
        \$('#toggle_check_all').on('change', function() {
            var checked = \$(this).prop('checked');
            if (checked) {
                \$('input[id^=\"check_\"]').prop('checked', true);
            } else {
                \$('input[id^=\"check_\"]').prop('checked', false);
            }
            toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
        });

        ";
        // line 20
        echo "        \$('#bulkSendNotifyChangeCardMail, #order_add').on('click', function (e) {
            e.preventDefault();
            var modal = \$('#sentUpdateModal');
            var bootstrapModal = new bootstrap.Modal(modal.get(0));
            bootstrapModal.show();
            var eventTarget = \$(e.currentTarget);
            var type = eventTarget.data('type');
            switch (type) {
                case 'mail':
                    updater = new BulkSendMail(modal, eventTarget);
                    break;
                case 'create_order':
                    updater = new BulkCreateOrder(modal, eventTarget);
                    break;
                default:
                    return;
            }
            \$('.modal-title', modal).text(updater.modalTitle);
            \$('.modal-body > p.modal-message', modal).html(updater.modalMessage);
            \$('#bulkChange')
                .attr({
                    'data-type': eventTarget.data('type'),
                    'data-update-status-url': eventTarget.data('update-status-url'),
                    'data-notify-mail-url': eventTarget.data('notify-mail-url'),
                })
                .text(updater.modalButton);
        });
        // プログレスバーの表示を制御
        \$('#bulkChange, .progressModal').on('click', function (e) {
            var eventTarget = \$(e.currentTarget);
            var type = eventTarget.data('type');
            var modal = \$('#sentUpdateModal');
            switch (type) {
                case 'mail':
                    updater = new BulkSendMail(modal, eventTarget) ;
                    break;
                case 'create_order':
                    var isChecked = false;
                    \$('input[id^=check_]').each(function() {
                        var check = \$(this).prop('checked');
                        if (check) {
                            isChecked = true;
                        }
                    });
                    if (!isChecked) {
                        alert(\"チェックボックスが選択されていません\");
                        return false;
                    }
                    \$('#form_bulk').attr('action', \"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_index_add");
        echo "\");
                    \$('#form_bulk').submit();
                    return;
                default:
                    return;
            }
            \$('.modal-body > p.modal-message', modal).text(\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bulk_action__in_progress_message"), "html", null, true);
        echo "\");
            \$('button', modal).hide();
            \$('.progress', modal).show();
            updater.totalCount = updater.getTotalCount();
            var updater = new BulkSendMail(modal, eventTarget);
            \$('button', modal).hide();
            \$('.progress', modal).show();
            updater.totalCount = updater.getTotalCount();
            var progress = new \$.Deferred();
            progress.progress(function () {
                updater.progress(this, progress);
            }).fail(function () {
                updater.fail(this);
            }).always(function () {
                updater.always(this);
            })
            updater.getPromises(progress);
        });
    });
    /*
     * Super class
     */
    function ConfirmationModal(modal) {
        this.modal = modal;
        this.mailCount = 0;
        this.currentCount = 0;
        this.totalCount = 0;
    }
    ConfirmationModal.prototype = {
        modalTitle: \"カード変更依頼メール送信\",
        modalMessage: \"この操作は取り消すことができません。\",
        modalButton: \"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.execute"), "html", null, true);
        echo "\",
        getTotalCount: function () {
            return 1;
        },
        progress: function (result, progress) {
            \$('.progress-bar', this.modal).css('width', (++this.currentCount / this.totalCount * 100) + '%');
            if (result['message']) {
                var badge = (result['status'] === 'OK')
                    ? '<span class=\"badge bg-success\">OK</span>'
                    : '<span class=\"badge bg-warning\">NOTICE</span>';
                \$('<li>'+badge+' </li>')
                    .append(\$('<span></span>').text(result['message']))
                    .appendTo('#bulkErrors');
            }
            if (this.currentCount >= this.totalCount) {
                progress.resolve();
            }
        },
        fail: function (result) {
            \$('<li><span class=\"badge bg-danger\">ERROR</span> </li>')
                .append(\$('<span></span>').text(\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.system_error"), "html", null, true);
        echo "\"))
                .appendTo('#bulkErrors');
        },
        always: function (result) {
            \$('.progress', this.modal).hide();
            \$('.modal-body > p.modal-message', this.modal).text(\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bulk_action__complete_message"), "html", null, true);
        echo "\");
            \$('#bulkChangeComplete').show();
        },
        getPromises: function (progress, url) {
            return \$.ajax({
                'url': url,
                'type': 'PUT',
            })
                .fail(function () {
                    progress.reject();
                    ConfirmationModal.prototype.fail.call(this);
                })
                .always(function (data) {
                    progress.notifyWith(data);
                });
        }
    };

    function SimpleSendMail(modal, eventTarget) {
        ConfirmationModal.call(this, modal);
        this.eventTarget = eventTarget;
        this.notifierCompleteMessage = '';
    }
    // extend super class
    SimpleSendMail.prototype = Object.create(ConfirmationModal.prototype, {
        constructor: {
            value: ConfirmationModal
        },
        progress: {
            value: function (result, progress) {
                if (result.mail) {
                    this.mailCount++;
                    this.notifierCompleteMessage = '";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail_send__complete_message"), "html", null, true);
        echo "'.replace(/%count%/, this.mailCount);
                }
                ConfirmationModal.prototype.progress.call(this, result, progress);
            }
        },
        always: {
            value: function (result) {
                ConfirmationModal.prototype.always.call(this, result);
                \$('.modal-body > p.modal-message', this.modal).text(this.notifierCompleteMessage);
            }
        },
        getPromises: {
            value: function (progress) {
                var url = this.eventTarget.data('update-status-url');
                return ConfirmationModal.prototype.getPromises.call(this, progress, url);
            }
        }
    });
    function BulkCreateOrder(modal) {
    }
    BulkCreateOrder.prototype = Object.create(ConfirmationModal.prototype, {
        modalTitle: {
            value: \"定期受注より受注を一括作成します\"
        },
        modalMessage: {
            value: \"この操作は取り消すことができません。<br />決済方法が「クレジットカード決済」の場合、受注作成と同時に決済処理が行われます。\"
        },
        modalButton: {
            value: \"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.send"), "html", null, true);
        echo "\"
        },
    })
    function BulkSendMail(modal) {
        SimpleSendMail.call(this, modal);
    }
    BulkSendMail.prototype = Object.create(SimpleSendMail.prototype, {
        constructor: {
            value: SimpleSendMail
        },
        modalTitle: {
            value: \"カード変更依頼メールを送信します\"
        },
        modalMessage: {
            value: \"この操作は取り消すことができません。\"
        },
        modalButton: {
            value: \"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.send"), "html", null, true);
        echo "\"
        },
        getTotalCount: {
            value: function () {
                return \$('input[data-notify-mail-url]:checked').length;
            }
        },
        getPromises: {
            value: function (progress) {
                return \$('input[data-notify-mail-url]:checked').map(function () {
                    var url = \$(this).data('notify-mail-url');
                    return ConfirmationModal.prototype.getPromises.call(this, progress, url);
                });
            }
        }
    });
    \$('#bulkChangeComplete').on('click', function() {
        location.href = '";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_regular_index", ["resume" => 1]);
        echo "';
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EccubePaymentLite42/Resource/template/admin/Regular/Order/confirmationModal_js.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  308 => 224,  288 => 207,  268 => 190,  237 => 162,  202 => 130,  194 => 125,  171 => 105,  137 => 74,  128 => 68,  78 => 20,  61 => 4,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        {# チェックボックスの一括選択 #}
        toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
        \$('input[id^=\"check_\"]').on('change', function() {
            \$('#toggle_check_all').prop('checked', false);
            toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
        });
        \$('#toggle_check_all').on('change', function() {
            var checked = \$(this).prop('checked');
            if (checked) {
                \$('input[id^=\"check_\"]').prop('checked', true);
            } else {
                \$('input[id^=\"check_\"]').prop('checked', false);
            }
            toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
        });

        {# カード依頼変更メール送信処理 #}
        \$('#bulkSendNotifyChangeCardMail, #order_add').on('click', function (e) {
            e.preventDefault();
            var modal = \$('#sentUpdateModal');
            var bootstrapModal = new bootstrap.Modal(modal.get(0));
            bootstrapModal.show();
            var eventTarget = \$(e.currentTarget);
            var type = eventTarget.data('type');
            switch (type) {
                case 'mail':
                    updater = new BulkSendMail(modal, eventTarget);
                    break;
                case 'create_order':
                    updater = new BulkCreateOrder(modal, eventTarget);
                    break;
                default:
                    return;
            }
            \$('.modal-title', modal).text(updater.modalTitle);
            \$('.modal-body > p.modal-message', modal).html(updater.modalMessage);
            \$('#bulkChange')
                .attr({
                    'data-type': eventTarget.data('type'),
                    'data-update-status-url': eventTarget.data('update-status-url'),
                    'data-notify-mail-url': eventTarget.data('notify-mail-url'),
                })
                .text(updater.modalButton);
        });
        // プログレスバーの表示を制御
        \$('#bulkChange, .progressModal').on('click', function (e) {
            var eventTarget = \$(e.currentTarget);
            var type = eventTarget.data('type');
            var modal = \$('#sentUpdateModal');
            switch (type) {
                case 'mail':
                    updater = new BulkSendMail(modal, eventTarget) ;
                    break;
                case 'create_order':
                    var isChecked = false;
                    \$('input[id^=check_]').each(function() {
                        var check = \$(this).prop('checked');
                        if (check) {
                            isChecked = true;
                        }
                    });
                    if (!isChecked) {
                        alert(\"チェックボックスが選択されていません\");
                        return false;
                    }
                    \$('#form_bulk').attr('action', \"{{ url('eccube_payment_lite42_admin_regular_index_add') }}\");
                    \$('#form_bulk').submit();
                    return;
                default:
                    return;
            }
            \$('.modal-body > p.modal-message', modal).text(\"{{ 'admin.order.bulk_action__in_progress_message'|trans }}\");
            \$('button', modal).hide();
            \$('.progress', modal).show();
            updater.totalCount = updater.getTotalCount();
            var updater = new BulkSendMail(modal, eventTarget);
            \$('button', modal).hide();
            \$('.progress', modal).show();
            updater.totalCount = updater.getTotalCount();
            var progress = new \$.Deferred();
            progress.progress(function () {
                updater.progress(this, progress);
            }).fail(function () {
                updater.fail(this);
            }).always(function () {
                updater.always(this);
            })
            updater.getPromises(progress);
        });
    });
    /*
     * Super class
     */
    function ConfirmationModal(modal) {
        this.modal = modal;
        this.mailCount = 0;
        this.currentCount = 0;
        this.totalCount = 0;
    }
    ConfirmationModal.prototype = {
        modalTitle: \"カード変更依頼メール送信\",
        modalMessage: \"この操作は取り消すことができません。\",
        modalButton: \"{{ 'admin.common.execute'|trans }}\",
        getTotalCount: function () {
            return 1;
        },
        progress: function (result, progress) {
            \$('.progress-bar', this.modal).css('width', (++this.currentCount / this.totalCount * 100) + '%');
            if (result['message']) {
                var badge = (result['status'] === 'OK')
                    ? '<span class=\"badge bg-success\">OK</span>'
                    : '<span class=\"badge bg-warning\">NOTICE</span>';
                \$('<li>'+badge+' </li>')
                    .append(\$('<span></span>').text(result['message']))
                    .appendTo('#bulkErrors');
            }
            if (this.currentCount >= this.totalCount) {
                progress.resolve();
            }
        },
        fail: function (result) {
            \$('<li><span class=\"badge bg-danger\">ERROR</span> </li>')
                .append(\$('<span></span>').text(\"{{ 'admin.common.system_error'|trans }}\"))
                .appendTo('#bulkErrors');
        },
        always: function (result) {
            \$('.progress', this.modal).hide();
            \$('.modal-body > p.modal-message', this.modal).text(\"{{ 'admin.order.bulk_action__complete_message'|trans }}\");
            \$('#bulkChangeComplete').show();
        },
        getPromises: function (progress, url) {
            return \$.ajax({
                'url': url,
                'type': 'PUT',
            })
                .fail(function () {
                    progress.reject();
                    ConfirmationModal.prototype.fail.call(this);
                })
                .always(function (data) {
                    progress.notifyWith(data);
                });
        }
    };

    function SimpleSendMail(modal, eventTarget) {
        ConfirmationModal.call(this, modal);
        this.eventTarget = eventTarget;
        this.notifierCompleteMessage = '';
    }
    // extend super class
    SimpleSendMail.prototype = Object.create(ConfirmationModal.prototype, {
        constructor: {
            value: ConfirmationModal
        },
        progress: {
            value: function (result, progress) {
                if (result.mail) {
                    this.mailCount++;
                    this.notifierCompleteMessage = '{{ 'admin.order.shipping_mail_send__complete_message'|trans }}'.replace(/%count%/, this.mailCount);
                }
                ConfirmationModal.prototype.progress.call(this, result, progress);
            }
        },
        always: {
            value: function (result) {
                ConfirmationModal.prototype.always.call(this, result);
                \$('.modal-body > p.modal-message', this.modal).text(this.notifierCompleteMessage);
            }
        },
        getPromises: {
            value: function (progress) {
                var url = this.eventTarget.data('update-status-url');
                return ConfirmationModal.prototype.getPromises.call(this, progress, url);
            }
        }
    });
    function BulkCreateOrder(modal) {
    }
    BulkCreateOrder.prototype = Object.create(ConfirmationModal.prototype, {
        modalTitle: {
            value: \"定期受注より受注を一括作成します\"
        },
        modalMessage: {
            value: \"この操作は取り消すことができません。<br />決済方法が「クレジットカード決済」の場合、受注作成と同時に決済処理が行われます。\"
        },
        modalButton: {
            value: \"{{ 'admin.common.send'|trans }}\"
        },
    })
    function BulkSendMail(modal) {
        SimpleSendMail.call(this, modal);
    }
    BulkSendMail.prototype = Object.create(SimpleSendMail.prototype, {
        constructor: {
            value: SimpleSendMail
        },
        modalTitle: {
            value: \"カード変更依頼メールを送信します\"
        },
        modalMessage: {
            value: \"この操作は取り消すことができません。\"
        },
        modalButton: {
            value: \"{{ 'admin.common.send'|trans }}\"
        },
        getTotalCount: {
            value: function () {
                return \$('input[data-notify-mail-url]:checked').length;
            }
        },
        getPromises: {
            value: function (progress) {
                return \$('input[data-notify-mail-url]:checked').map(function () {
                    var url = \$(this).data('notify-mail-url');
                    return ConfirmationModal.prototype.getPromises.call(this, progress, url);
                });
            }
        }
    });
    \$('#bulkChangeComplete').on('click', function() {
        location.href = '{{ url('eccube_payment_lite42_admin_regular_index', { 'resume': 1 }) }}';
    });
</script>
", "EccubePaymentLite42/Resource/template/admin/Regular/Order/confirmationModal_js.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Regular\\Order\\confirmationModal_js.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 74, "trans" => 74);
        static $functions = array("url" => 68);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
