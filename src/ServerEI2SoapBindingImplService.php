<?php

namespace Solarwinds\Soap;

class ServerEI2SoapBindingImplService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'activeIssuesList' => 'Solarwinds\\Soap\\activeIssuesList',
      'tKeyPair' => 'Solarwinds\\Soap\\tKeyPair',
      'activeIssuesListResponse' => 'Solarwinds\\Soap\\activeIssuesListResponse',
      'deviceIssue' => 'Solarwinds\\Soap\\deviceIssue',
      'customerAdd' => 'Solarwinds\\Soap\\customerAdd',
      'customerAddResponse' => 'Solarwinds\\Soap\\customerAddResponse',
      'customerDeviceReport' => 'Solarwinds\\Soap\\customerDeviceReport',
      'customerDeviceReportResponse' => 'Solarwinds\\Soap\\customerDeviceReportResponse',
      'deviceReportData' => 'Solarwinds\\Soap\\deviceReportData',
      'deviceReportDeviceData' => 'Solarwinds\\Soap\\deviceReportDeviceData',
      'deviceHardDriveData' => 'Solarwinds\\Soap\\deviceHardDriveData',
      'mspaHeartbeat' => 'Solarwinds\\Soap\\mspaHeartbeat',
      'mspaHeartbeatResponse' => 'Solarwinds\\Soap\\mspaHeartbeatResponse',
      'accessGroupAdd' => 'Solarwinds\\Soap\\accessGroupAdd',
      'accessGroupAddResponse' => 'Solarwinds\\Soap\\accessGroupAddResponse',
      'lastExportReset' => 'Solarwinds\\Soap\\lastExportReset',
      'lastExportResetResponse' => 'Solarwinds\\Soap\\lastExportResetResponse',
      'deviceAssetInfoExport' => 'Solarwinds\\Soap\\deviceAssetInfoExport',
      'deviceAssetInfoExportResponse' => 'Solarwinds\\Soap\\deviceAssetInfoExportResponse',
      'deviceData' => 'Solarwinds\\Soap\\deviceData',
      'userRoleList' => 'Solarwinds\\Soap\\userRoleList',
      'userRoleListResponse' => 'Solarwinds\\Soap\\userRoleListResponse',
      'userRole' => 'Solarwinds\\Soap\\userRole',
      'tKeyValue' => 'Solarwinds\\Soap\\tKeyValue',
      'deviceGetStatus' => 'Solarwinds\\Soap\\deviceGetStatus',
      'deviceGetStatusResponse' => 'Solarwinds\\Soap\\deviceGetStatusResponse',
      'deviceStatus' => 'Solarwinds\\Soap\\deviceStatus',
      'psaCreateCustomTicket' => 'Solarwinds\\Soap\\psaCreateCustomTicket',
      'psaCreateCustomTicketResponse' => 'Solarwinds\\Soap\\psaCreateCustomTicketResponse',
      'eiCustomPsaTicketResponse' => 'Solarwinds\\Soap\\eiCustomPsaTicketResponse',
      'accessGroupList' => 'Solarwinds\\Soap\\accessGroupList',
      'accessGroupListResponse' => 'Solarwinds\\Soap\\accessGroupListResponse',
      'accessGroupEI' => 'Solarwinds\\Soap\\accessGroupEI',
      'SOAdd' => 'Solarwinds\\Soap\\SOAdd',
      'SOAddResponse' => 'Solarwinds\\Soap\\SOAddResponse',
      'userRoleAdd' => 'Solarwinds\\Soap\\userRoleAdd',
      'userRoleAddResponse' => 'Solarwinds\\Soap\\userRoleAddResponse',
      'customerDelete' => 'Solarwinds\\Soap\\customerDelete',
      'customerDeleteResponse' => 'Solarwinds\\Soap\\customerDeleteResponse',
      'deviceList' => 'Solarwinds\\Soap\\deviceList',
      'deviceListResponse' => 'Solarwinds\\Soap\\deviceListResponse',
      'device' => 'Solarwinds\\Soap\\device',
      'jobStatusList' => 'Solarwinds\\Soap\\jobStatusList',
      'jobStatusListResponse' => 'Solarwinds\\Soap\\jobStatusListResponse',
      'jobStatus' => 'Solarwinds\\Soap\\jobStatus',
      'customerModify' => 'Solarwinds\\Soap\\customerModify',
      'customerModifyResponse' => 'Solarwinds\\Soap\\customerModifyResponse',
      'deviceAssetInfoExportDevice' => 'Solarwinds\\Soap\\deviceAssetInfoExportDevice',
      'deviceAssetInfoExportDeviceResponse' => 'Solarwinds\\Soap\\deviceAssetInfoExportDeviceResponse',
      'userRoleGet' => 'Solarwinds\\Soap\\userRoleGet',
      'userRoleGetResponse' => 'Solarwinds\\Soap\\userRoleGetResponse',
      'taskPauseMonitoring' => 'Solarwinds\\Soap\\taskPauseMonitoring',
      'taskPauseMonitoringResponse' => 'Solarwinds\\Soap\\taskPauseMonitoringResponse',
      'wrapperTaskMonitoring' => 'Solarwinds\\Soap\\wrapperTaskMonitoring',
      'tEITaskFailed' => 'Solarwinds\\Soap\\tEITaskFailed',
      'psaCredentialsValidate' => 'Solarwinds\\Soap\\psaCredentialsValidate',
      'psaCredentialsValidateResponse' => 'Solarwinds\\Soap\\psaCredentialsValidateResponse',
      'deviceGet' => 'Solarwinds\\Soap\\deviceGet',
      'deviceGetResponse' => 'Solarwinds\\Soap\\deviceGetResponse',
      'deviceInfo' => 'Solarwinds\\Soap\\deviceInfo',
      'psaGetCustomTicket' => 'Solarwinds\\Soap\\psaGetCustomTicket',
      'psaGetCustomTicketResponse' => 'Solarwinds\\Soap\\psaGetCustomTicketResponse',
      'eiCustomPsaTicketDetails' => 'Solarwinds\\Soap\\eiCustomPsaTicketDetails',
      'versionInfoGet' => 'Solarwinds\\Soap\\versionInfoGet',
      'tCredentials' => 'Solarwinds\\Soap\\tCredentials',
      'versionInfoGetResponse' => 'Solarwinds\\Soap\\versionInfoGetResponse',
      'configValue' => 'Solarwinds\\Soap\\configValue',
      'acknowledgeNotification' => 'Solarwinds\\Soap\\acknowledgeNotification',
      'acknowledgeNotificationResponse' => 'Solarwinds\\Soap\\acknowledgeNotificationResponse',
      'userAdd' => 'Solarwinds\\Soap\\userAdd',
      'userAddResponse' => 'Solarwinds\\Soap\\userAddResponse',
      'devicePropertyModify' => 'Solarwinds\\Soap\\devicePropertyModify',
      'deviceProperties' => 'Solarwinds\\Soap\\deviceProperties',
      'deviceProperty' => 'Solarwinds\\Soap\\deviceProperty',
      'devicePropertyModifyResponse' => 'Solarwinds\\Soap\\devicePropertyModifyResponse',
      'psaReopenCustomTicket' => 'Solarwinds\\Soap\\psaReopenCustomTicket',
      'psaReopenCustomTicketResponse' => 'Solarwinds\\Soap\\psaReopenCustomTicketResponse',
      'customerDeviceReportGet' => 'Solarwinds\\Soap\\customerDeviceReportGet',
      'customerDeviceReportGetResponse' => 'Solarwinds\\Soap\\customerDeviceReportGetResponse',
      'taskResumeMonitoring' => 'Solarwinds\\Soap\\taskResumeMonitoring',
      'taskResumeMonitoringResponse' => 'Solarwinds\\Soap\\taskResumeMonitoringResponse',
      'customerListChildren' => 'Solarwinds\\Soap\\customerListChildren',
      'customerListChildrenResponse' => 'Solarwinds\\Soap\\customerListChildrenResponse',
      'customer' => 'Solarwinds\\Soap\\customer',
      'accessGroupGet' => 'Solarwinds\\Soap\\accessGroupGet',
      'accessGroupGetResponse' => 'Solarwinds\\Soap\\accessGroupGetResponse',
      'deviceAssetInfoExportDeviceWithSettings' => 'Solarwinds\\Soap\\deviceAssetInfoExportDeviceWithSettings',
      'deviceAssetInfoExportDeviceWithSettingsResponse' => 'Solarwinds\\Soap\\deviceAssetInfoExportDeviceWithSettingsResponse',
      'devicePropertyList' => 'Solarwinds\\Soap\\devicePropertyList',
      'devicePropertyListResponse' => 'Solarwinds\\Soap\\devicePropertyListResponse',
      'customerList' => 'Solarwinds\\Soap\\customerList',
      'customerListResponse' => 'Solarwinds\\Soap\\customerListResponse',
      'psaResolveCustomTicket' => 'Solarwinds\\Soap\\psaResolveCustomTicket',
      'psaResolveCustomTicketResponse' => 'Solarwinds\\Soap\\psaResolveCustomTicketResponse',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(string $wsdl, array $options = [])
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(['features' => 1], $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param activeIssuesList $parameters
     * @return activeIssuesListResponse
     */
    public function activeIssuesList(activeIssuesList $parameters)
    {
      return $this->__soapCall('activeIssuesList', array($parameters));
    }

    /**
     * @param customerDeviceReport $parameters
     * @return customerDeviceReportResponse
     */
    public function customerDeviceReport(customerDeviceReport $parameters)
    {
      return $this->__soapCall('customerDeviceReport', array($parameters));
    }

    /**
     * @param customerAdd $parameters
     * @return customerAddResponse
     */
    public function customerAdd(customerAdd $parameters)
    {
      return $this->__soapCall('customerAdd', array($parameters));
    }

    /**
     * @param mspaHeartbeat $parameters
     * @return mspaHeartbeatResponse
     */
    public function mspaHeartbeat(mspaHeartbeat $parameters)
    {
      return $this->__soapCall('mspaHeartbeat', array($parameters));
    }

    /**
     * @param lastExportReset $parameters
     * @return lastExportResetResponse
     */
    public function lastExportReset(lastExportReset $parameters)
    {
      return $this->__soapCall('lastExportReset', array($parameters));
    }

    /**
     * @param accessGroupAdd $parameters
     * @return accessGroupAddResponse
     */
    public function accessGroupAdd(accessGroupAdd $parameters)
    {
      return $this->__soapCall('accessGroupAdd', array($parameters));
    }

    /**
     * @param deviceAssetInfoExport $parameters
     * @return deviceAssetInfoExportResponse
     */
    public function deviceAssetInfoExport(deviceAssetInfoExport $parameters)
    {
      return $this->__soapCall('deviceAssetInfoExport', array($parameters));
    }

    /**
     * @param userRoleList $parameters
     * @return userRoleListResponse
     */
    public function userRoleList(userRoleList $parameters)
    {
      return $this->__soapCall('userRoleList', array($parameters));
    }

    /**
     * @param deviceGetStatus $parameters
     * @return deviceGetStatusResponse
     */
    public function deviceGetStatus(deviceGetStatus $parameters)
    {
      return $this->__soapCall('deviceGetStatus', array($parameters));
    }

    /**
     * @param psaCreateCustomTicket $parameters
     * @return psaCreateCustomTicketResponse
     */
    public function psaCreateCustomTicket(psaCreateCustomTicket $parameters)
    {
      return $this->__soapCall('psaCreateCustomTicket', array($parameters));
    }

    /**
     * @param accessGroupList $parameters
     * @return accessGroupListResponse
     */
    public function accessGroupList(accessGroupList $parameters)
    {
      return $this->__soapCall('accessGroupList', array($parameters));
    }

    /**
     * @param SOAdd $parameters
     * @return SOAddResponse
     */
    public function SOAdd(SOAdd $parameters)
    {
      return $this->__soapCall('SOAdd', array($parameters));
    }

    /**
     * @param userRoleAdd $parameters
     * @return userRoleAddResponse
     */
    public function userRoleAdd(userRoleAdd $parameters)
    {
      return $this->__soapCall('userRoleAdd', array($parameters));
    }

    /**
     * @param customerDelete $parameters
     * @return customerDeleteResponse
     */
    public function customerDelete(customerDelete $parameters)
    {
      return $this->__soapCall('customerDelete', array($parameters));
    }

    /**
     * @param deviceList $parameters
     * @return deviceListResponse
     */
    public function deviceList(deviceList $parameters)
    {
      return $this->__soapCall('deviceList', array($parameters));
    }

    /**
     * @param jobStatusList $parameters
     * @return jobStatusListResponse
     */
    public function jobStatusList(jobStatusList $parameters)
    {
      return $this->__soapCall('jobStatusList', array($parameters));
    }

    /**
     * @param customerModify $parameters
     * @return customerModifyResponse
     */
    public function customerModify(customerModify $parameters)
    {
      return $this->__soapCall('customerModify', array($parameters));
    }

    /**
     * @param deviceAssetInfoExportDevice $parameters
     * @return deviceAssetInfoExportDeviceResponse
     */
    public function deviceAssetInfoExportDevice(deviceAssetInfoExportDevice $parameters)
    {
      return $this->__soapCall('deviceAssetInfoExportDevice', array($parameters));
    }

    /**
     * @param userRoleGet $parameters
     * @return userRoleGetResponse
     */
    public function userRoleGet(userRoleGet $parameters)
    {
      return $this->__soapCall('userRoleGet', array($parameters));
    }

    /**
     * @param taskPauseMonitoring $parameters
     * @return taskPauseMonitoringResponse
     */
    public function taskPauseMonitoring(taskPauseMonitoring $parameters)
    {
      return $this->__soapCall('taskPauseMonitoring', array($parameters));
    }

    /**
     * @param psaCredentialsValidate $parameters
     * @return psaCredentialsValidateResponse
     */
    public function psaCredentialsValidate(psaCredentialsValidate $parameters)
    {
      return $this->__soapCall('psaCredentialsValidate', array($parameters));
    }

    /**
     * @param deviceGet $parameters
     * @return deviceGetResponse
     */
    public function deviceGet(deviceGet $parameters)
    {
      return $this->__soapCall('deviceGet', array($parameters));
    }

    /**
     * @param psaGetCustomTicket $parameters
     * @return psaGetCustomTicketResponse
     */
    public function psaGetCustomTicket(psaGetCustomTicket $parameters)
    {
      return $this->__soapCall('psaGetCustomTicket', array($parameters));
    }

    /**
     * @param versionInfoGet $parameters
     * @return versionInfoGetResponse
     */
    public function versionInfoGet(versionInfoGet $parameters)
    {
      return $this->__soapCall('versionInfoGet', array($parameters));
    }

    /**
     * @param acknowledgeNotification $parameters
     * @return acknowledgeNotificationResponse
     */
    public function acknowledgeNotification(acknowledgeNotification $parameters)
    {
      return $this->__soapCall('acknowledgeNotification', array($parameters));
    }

    /**
     * @param userAdd $parameters
     * @return userAddResponse
     */
    public function userAdd(userAdd $parameters)
    {
      return $this->__soapCall('userAdd', array($parameters));
    }

    /**
     * @param devicePropertyModify $parameters
     * @return devicePropertyModifyResponse
     */
    public function devicePropertyModify(devicePropertyModify $parameters)
    {
      return $this->__soapCall('devicePropertyModify', array($parameters));
    }

    /**
     * @param psaReopenCustomTicket $parameters
     * @return psaReopenCustomTicketResponse
     */
    public function psaReopenCustomTicket(psaReopenCustomTicket $parameters)
    {
      return $this->__soapCall('psaReopenCustomTicket', array($parameters));
    }

    /**
     * @param customerDeviceReportGet $parameters
     * @return customerDeviceReportGetResponse
     */
    public function customerDeviceReportGet(customerDeviceReportGet $parameters)
    {
      return $this->__soapCall('customerDeviceReportGet', array($parameters));
    }

    /**
     * @param taskResumeMonitoring $parameters
     * @return taskResumeMonitoringResponse
     */
    public function taskResumeMonitoring(taskResumeMonitoring $parameters)
    {
      return $this->__soapCall('taskResumeMonitoring', array($parameters));
    }

    /**
     * @param customerListChildren $parameters
     * @return customerListChildrenResponse
     */
    public function customerListChildren(customerListChildren $parameters)
    {
      return $this->__soapCall('customerListChildren', array($parameters));
    }

    /**
     * @param accessGroupGet $parameters
     * @return accessGroupGetResponse
     */
    public function accessGroupGet(accessGroupGet $parameters)
    {
      return $this->__soapCall('accessGroupGet', array($parameters));
    }

    /**
     * @param deviceAssetInfoExportDeviceWithSettings $parameters
     * @return deviceAssetInfoExportDeviceWithSettingsResponse
     */
    public function deviceAssetInfoExportDeviceWithSettings(deviceAssetInfoExportDeviceWithSettings $parameters)
    {
      return $this->__soapCall('deviceAssetInfoExportDeviceWithSettings', array($parameters));
    }

    /**
     * @param devicePropertyList $parameters
     * @return devicePropertyListResponse
     */
    public function devicePropertyList(devicePropertyList $parameters)
    {
      return $this->__soapCall('devicePropertyList', array($parameters));
    }

    /**
     * @param customerList $parameters
     * @return customerListResponse
     */
    public function customerList(customerList $parameters)
    {
      return $this->__soapCall('customerList', array($parameters));
    }

    /**
     * @param psaResolveCustomTicket $parameters
     * @return psaResolveCustomTicketResponse
     */
    public function psaResolveCustomTicket(psaResolveCustomTicket $parameters)
    {
      return $this->__soapCall('psaResolveCustomTicket', array($parameters));
    }

}
