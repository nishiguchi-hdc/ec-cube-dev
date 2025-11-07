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

/* EccubePaymentLite42/Resource/template/admin/Order/index.twig */
class __TwigTemplate_40d5ada73243f6e63ca771ef6091733e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/index.twig"));

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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EccubePaymentLite42/Resource/template/admin/Order/index.twig"));

        // line 1
        echo "<script>
    \$(function() {
        // 決済状況 列見出し名
        var PAY_STATUS_COL_LABEL = '決済状況';
        // 決済状況 追加先の列番号
        var PAY_STATUS_COL_BEFORE_INDEX = 4;

        // 注文一覧テーブル要素
        var \$orderTable       = \$('#search_result');
        var \$orderTableHeader = \$orderTable.find('thead');
        var \$orderTableBody   = \$orderTable.find('tbody');

        // テーブルヘッダ行に決済状況列を追加
        \$orderTableHeader
            .find('th:eq('+(PAY_STATUS_COL_BEFORE_INDEX-1)+')')
            .after('<th class=\"border-top-0 pt-2 pb-2 text-center text-nowrap\">'+PAY_STATUS_COL_LABEL+'</th>');
        // 注文レコードに決済状況列を追加
        var orders = JSON.parse('";
        // line 18
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 18, $this->source); })()), 18, $this->source));
        echo "');
        var \$orderRowList = \$orderTableBody.find('tr');
        var count = 0;
        \$.each(orders, function(i, order) {
            \$.each(order.Shippings, function(j, shipping) {
                var paymentStatusText = order.PaymentStatus ? order.PaymentStatus.name : '';
                if (order.payment_method === '";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["virtual_account"]) || array_key_exists("virtual_account", $context) ? $context["virtual_account"] : (function () { throw new RuntimeError('Variable "virtual_account" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
        echo "' && order.PaymentStatus && order.PaymentStatus.id === parseInt('";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["payment_status_id"]) || array_key_exists("payment_status_id", $context) ? $context["payment_status_id"] : (function () { throw new RuntimeError('Variable "payment_status_id" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
        echo "')) {
                    paymentStatusText += order.PaymentStatus ? '<i class=\"fa fa-exclamation-circle text-secondary\" aria-hidden=\"true\" data-bs-toggle=\"tooltip\" data-placement=\"top\" title=\"イプシロン管理画面で入金金額を確認してください\"></i>' : '';
                }
                \$(\$orderRowList[count]).find('input[name=\"ids[]\"]').attr({'shipping-id': shipping.id});
                \$(\$orderRowList[count])
                    .find('td:eq('+(PAY_STATUS_COL_BEFORE_INDEX-1)+')')
                    .after('<td class=\"align-middle text-center\">'+paymentStatusText+'</td>');
                count++;
            });
        });
        \$('[data-bs-toggle=\"tooltip\"]').tooltip();
    ";
        // line 36
        echo "        var BulkPayStatusUpdate = function(modal, eventTarget) {
            ConfirmationModal.call(this, modal);
            this.eventTarget = eventTarget;
        };
        // extend super class
        BulkPayStatusUpdate.prototype = Object.create(ConfirmationModal.prototype, {
            constructor: {
                value: ConfirmationModal
            },
            modalTitle: {
                value: '決済状況の変更'
            },
            getTotalCount: {
                value: function() {
                    var \$checkedList = \$('input[data-id]:checked');
                    // 注文IDの重複を除外
                    var orderIdList = \$checkedList.get().reduce(function(acc, val, idx) {
                        var orderId = val.getAttribute('shipping-id');
                        if (acc.indexOf(orderId) === -1) {
                            acc.push(orderId);
                        }
                        return acc;
                    }, []);
                    return orderIdList.length;
                }
            },
            progress: {
                value: function(result, progress) {
                    // プログレスバーの更新
                    \$('.progress-bar', this.modal).css('width', (++this.currentCount / this.totalCount * 100) + '%');
                    if (result['message']) {
                        var badge = (result['status'] == 'OK')
                            ? '<span class=\"badge bg-success\">OK</span>'
                            : '<span class=\"badge bg-warning\">NOTICE</span>';
                        \$('<li>'+badge+' </li>')
                            .append(\$('<span></span>').text(result['message']))
                            .appendTo('#bulkErrors');
                    }
                    if (this.currentCount >= this.totalCount) {
                        progress.resolve();
                    }
                }
            },
            getPromises: {
                value: function(progress) {
                    var requestOrderIdList = [];
                    var promises = [];
                    // チェックされているチェックボックスごとに処理を行う
                    \$('input[data-id]:checked').each(function(idx, elm) {
                        var shippingId = elm.getAttribute('shipping-id');
                        var params = {
                            paymentStatusId: \$('#gmo_epsilon_option_bulk_payment_status').val(),
                            bulk: true,
                            shippingId: shippingId
                        };
                        var url = '";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eccube_payment_lite42_admin_change_payment_status");
        echo "'
                        // 既にリクエストが行われている注文の場合はスキップ
                        if (requestOrderIdList.indexOf(shippingId) !== -1) {
                            return;
                        }
                        // リクエストを行う配送IDを保持
                        requestOrderIdList.push(shippingId);
                        var promise = \$.post(url, params)
                            .fail(function(err) {
                                progress.reject();
                                ConfirmationModal.prototype.fail.call(this);
                            })
                            .always(function(data) {
                                progress.notifyWith(data);
                            });
                        promises.push(promise);
                    });
                    return promises;
                }
            }
        });
        // プログレスバーの表示を制御
        var handleClickUpdatePayStatus = function(e) {
            var eventTarget = \$(e.currentTarget);
            var modal = \$('#sentUpdateModal');
            if (!\$('#gmo_epsilon_option_bulk_payment_status').val()) {
                alert('決済状況を選択してください');
                return;
            }
            updater = new BulkPayStatusUpdate(modal, eventTarget);
            // modal.modal();
            var bootstrapModal = new bootstrap.Modal(modal.get(0));
            bootstrapModal.show();
            modal.find('.modal-title').text(updater.modalTitle);
            modal.find('.modal-body > p.modal-message').text(\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bulk_action__in_progress_message"), "html", null, true);
        echo "\");
            modal.find('button').hide();
            \$('#bulk-options').hide();
            modal.find('.progress').show();
            updater.totalCount = updater.getTotalCount();
            var progress = new \$.Deferred();
            progress.progress(function() {
                updater.progress(this, progress);
            })
                .fail(function() {
                    updater.fail(this);
                })
                .always(function() {
                    updater.always(this);
                });
            updater.getPromises(progress);
        };
         // ↑EC-CUBE本体側 confirmationModal_js.twig(L41-)を参考に実装 ↑
        // 決済状況更新用のプルダウン追加
        var \$target = \$('#btn_bulk_status').parents('.btn-bulk-wrapper');
        var contents =
            '<div class=\"col btn-bulk-wrapper d-none\">' +
                '<div class=\"d-inline-block mr-2\">' +
                    '<select class=\"custom-select\" id=\"gmo_epsilon_option_bulk_payment_status\">' +
                        '<option value=\"\" selected>決済状況の変更</option>' +
                        ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["PaymentStatuses"]) || array_key_exists("PaymentStatuses", $context) ? $context["PaymentStatuses"] : (function () { throw new RuntimeError('Variable "PaymentStatuses" does not exist.', 150, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paymentStatus"]) {
            // line 151
            echo "                            '<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["paymentStatus"], "id", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["paymentStatus"], "name", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "</option>' +
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                    '</select>' +
                '</div>' +
                '<button type=\"button\" id=\"gmo_epsilon_btn_bulk_payment_status\" class=\"btn btn-ec-regular mr-2 progressModal\" data-type=\"status\" data-bulk-update=\"true\" data-submit=\"bulk\">' +
                    '決定' +
                '</button>' +
            '</div>';
        \$target.css('max-width', '240px').after(contents);
        \$('#gmo_epsilon_btn_bulk_payment_status').on('click', handleClickUpdatePayStatus);
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
        return "EccubePaymentLite42/Resource/template/admin/Order/index.twig";
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
        return array (  238 => 153,  227 => 151,  223 => 150,  195 => 125,  158 => 91,  101 => 36,  85 => 24,  76 => 18,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        // 決済状況 列見出し名
        var PAY_STATUS_COL_LABEL = '決済状況';
        // 決済状況 追加先の列番号
        var PAY_STATUS_COL_BEFORE_INDEX = 4;

        // 注文一覧テーブル要素
        var \$orderTable       = \$('#search_result');
        var \$orderTableHeader = \$orderTable.find('thead');
        var \$orderTableBody   = \$orderTable.find('tbody');

        // テーブルヘッダ行に決済状況列を追加
        \$orderTableHeader
            .find('th:eq('+(PAY_STATUS_COL_BEFORE_INDEX-1)+')')
            .after('<th class=\"border-top-0 pt-2 pb-2 text-center text-nowrap\">'+PAY_STATUS_COL_LABEL+'</th>');
        // 注文レコードに決済状況列を追加
        var orders = JSON.parse('{{ orders|json_encode|raw}}');
        var \$orderRowList = \$orderTableBody.find('tr');
        var count = 0;
        \$.each(orders, function(i, order) {
            \$.each(order.Shippings, function(j, shipping) {
                var paymentStatusText = order.PaymentStatus ? order.PaymentStatus.name : '';
                if (order.payment_method === '{{ virtual_account }}' && order.PaymentStatus && order.PaymentStatus.id === parseInt('{{ payment_status_id }}')) {
                    paymentStatusText += order.PaymentStatus ? '<i class=\"fa fa-exclamation-circle text-secondary\" aria-hidden=\"true\" data-bs-toggle=\"tooltip\" data-placement=\"top\" title=\"イプシロン管理画面で入金金額を確認してください\"></i>' : '';
                }
                \$(\$orderRowList[count]).find('input[name=\"ids[]\"]').attr({'shipping-id': shipping.id});
                \$(\$orderRowList[count])
                    .find('td:eq('+(PAY_STATUS_COL_BEFORE_INDEX-1)+')')
                    .after('<td class=\"align-middle text-center\">'+paymentStatusText+'</td>');
                count++;
            });
        });
        \$('[data-bs-toggle=\"tooltip\"]').tooltip();
    {# ↓EC-CUBE本体側 confirmationModal_js.twig(L41-)を参考に実装 ↓ #}
        var BulkPayStatusUpdate = function(modal, eventTarget) {
            ConfirmationModal.call(this, modal);
            this.eventTarget = eventTarget;
        };
        // extend super class
        BulkPayStatusUpdate.prototype = Object.create(ConfirmationModal.prototype, {
            constructor: {
                value: ConfirmationModal
            },
            modalTitle: {
                value: '決済状況の変更'
            },
            getTotalCount: {
                value: function() {
                    var \$checkedList = \$('input[data-id]:checked');
                    // 注文IDの重複を除外
                    var orderIdList = \$checkedList.get().reduce(function(acc, val, idx) {
                        var orderId = val.getAttribute('shipping-id');
                        if (acc.indexOf(orderId) === -1) {
                            acc.push(orderId);
                        }
                        return acc;
                    }, []);
                    return orderIdList.length;
                }
            },
            progress: {
                value: function(result, progress) {
                    // プログレスバーの更新
                    \$('.progress-bar', this.modal).css('width', (++this.currentCount / this.totalCount * 100) + '%');
                    if (result['message']) {
                        var badge = (result['status'] == 'OK')
                            ? '<span class=\"badge bg-success\">OK</span>'
                            : '<span class=\"badge bg-warning\">NOTICE</span>';
                        \$('<li>'+badge+' </li>')
                            .append(\$('<span></span>').text(result['message']))
                            .appendTo('#bulkErrors');
                    }
                    if (this.currentCount >= this.totalCount) {
                        progress.resolve();
                    }
                }
            },
            getPromises: {
                value: function(progress) {
                    var requestOrderIdList = [];
                    var promises = [];
                    // チェックされているチェックボックスごとに処理を行う
                    \$('input[data-id]:checked').each(function(idx, elm) {
                        var shippingId = elm.getAttribute('shipping-id');
                        var params = {
                            paymentStatusId: \$('#gmo_epsilon_option_bulk_payment_status').val(),
                            bulk: true,
                            shippingId: shippingId
                        };
                        var url = '{{ url('eccube_payment_lite42_admin_change_payment_status') }}'
                        // 既にリクエストが行われている注文の場合はスキップ
                        if (requestOrderIdList.indexOf(shippingId) !== -1) {
                            return;
                        }
                        // リクエストを行う配送IDを保持
                        requestOrderIdList.push(shippingId);
                        var promise = \$.post(url, params)
                            .fail(function(err) {
                                progress.reject();
                                ConfirmationModal.prototype.fail.call(this);
                            })
                            .always(function(data) {
                                progress.notifyWith(data);
                            });
                        promises.push(promise);
                    });
                    return promises;
                }
            }
        });
        // プログレスバーの表示を制御
        var handleClickUpdatePayStatus = function(e) {
            var eventTarget = \$(e.currentTarget);
            var modal = \$('#sentUpdateModal');
            if (!\$('#gmo_epsilon_option_bulk_payment_status').val()) {
                alert('決済状況を選択してください');
                return;
            }
            updater = new BulkPayStatusUpdate(modal, eventTarget);
            // modal.modal();
            var bootstrapModal = new bootstrap.Modal(modal.get(0));
            bootstrapModal.show();
            modal.find('.modal-title').text(updater.modalTitle);
            modal.find('.modal-body > p.modal-message').text(\"{{ 'admin.order.bulk_action__in_progress_message'|trans }}\");
            modal.find('button').hide();
            \$('#bulk-options').hide();
            modal.find('.progress').show();
            updater.totalCount = updater.getTotalCount();
            var progress = new \$.Deferred();
            progress.progress(function() {
                updater.progress(this, progress);
            })
                .fail(function() {
                    updater.fail(this);
                })
                .always(function() {
                    updater.always(this);
                });
            updater.getPromises(progress);
        };
         // ↑EC-CUBE本体側 confirmationModal_js.twig(L41-)を参考に実装 ↑
        // 決済状況更新用のプルダウン追加
        var \$target = \$('#btn_bulk_status').parents('.btn-bulk-wrapper');
        var contents =
            '<div class=\"col btn-bulk-wrapper d-none\">' +
                '<div class=\"d-inline-block mr-2\">' +
                    '<select class=\"custom-select\" id=\"gmo_epsilon_option_bulk_payment_status\">' +
                        '<option value=\"\" selected>決済状況の変更</option>' +
                        {% for paymentStatus in PaymentStatuses %}
                            '<option value=\"{{ paymentStatus.id }}\">{{ paymentStatus.name }}</option>' +
                        {% endfor %}
                    '</select>' +
                '</div>' +
                '<button type=\"button\" id=\"gmo_epsilon_btn_bulk_payment_status\" class=\"btn btn-ec-regular mr-2 progressModal\" data-type=\"status\" data-bulk-update=\"true\" data-submit=\"bulk\">' +
                    '決定' +
                '</button>' +
            '</div>';
        \$target.css('max-width', '240px').after(contents);
        \$('#gmo_epsilon_btn_bulk_payment_status').on('click', handleClickUpdatePayStatus);
    });
</script>
", "EccubePaymentLite42/Resource/template/admin/Order/index.twig", "C:\\xampp\\htdocs\\ec-cube-dev\\app\\Plugin\\EccubePaymentLite42\\Resource\\template\\admin\\Order\\index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 150);
        static $filters = array("raw" => 18, "json_encode" => 18, "escape" => 24, "trans" => 125);
        static $functions = array("url" => 91);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['raw', 'json_encode', 'escape', 'trans'],
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
