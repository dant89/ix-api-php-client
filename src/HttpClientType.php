<?php

namespace Dant89\IXAPIClient;

use Dant89\IXAPIClient\Clients\Account\AccountClient;
use Dant89\IXAPIClient\Clients\Accounts\AccountsClient;
use Dant89\IXAPIClient\Clients\Auth\AuthClient;
use Dant89\IXAPIClient\Clients\AvailabilityZones\AvailabilityZonesClient;
use Dant89\IXAPIClient\Clients\Connections\ConnectionsClient;
use Dant89\IXAPIClient\Clients\Contacts\ContactsClient;
use Dant89\IXAPIClient\Clients\Devices\DevicesClient;
use Dant89\IXAPIClient\Clients\Extensions\ExtensionsClient;
use Dant89\IXAPIClient\Clients\Facilities\FacilitiesClient;
use Dant89\IXAPIClient\Clients\Health\HealthClient;
use Dant89\IXAPIClient\Clients\Health\ImplementationClient;
use Dant89\IXAPIClient\Clients\Ips\IpsClient;
use Dant89\IXAPIClient\Clients\Macs\MacsClient;
use Dant89\IXAPIClient\Clients\MemberJoiningRules\MemberJoiningRulesClient;
use Dant89\IXAPIClient\Clients\MetroAreaNetworks\MetroAreaNetworksClient;
use Dant89\IXAPIClient\Clients\MetroAreas\MetroAreasClient;
use Dant89\IXAPIClient\Clients\NetworkFeatureConfigs\NetworkFeatureConfigsClient;
use Dant89\IXAPIClient\Clients\NetworkFeatures\NetworkFeaturesClient;
use Dant89\IXAPIClient\Clients\NetworkServiceConfigs\NetworkServiceConfigsClient;
use Dant89\IXAPIClient\Clients\NetworkServices\NetworkServicesClient;
use Dant89\IXAPIClient\Clients\Pops\PopsClient;
use Dant89\IXAPIClient\Clients\PortReservations\PortReservationsClient;
use Dant89\IXAPIClient\Clients\Ports\PortsClient;
use Dant89\IXAPIClient\Clients\ProductOfferings\ProductOfferingsClient;
use Dant89\IXAPIClient\Clients\RoleAssignments\RoleAssignmentsClient;
use Dant89\IXAPIClient\Clients\Roles\RolesClient;

enum HttpClientType: string
{
    case AUTH = AuthClient::class;
    case ACCOUNT = AccountClient::class;
    case ACCOUNTS = AccountsClient::class;
    case AVAILABILITY_ZONES = AvailabilityZonesClient::class;
    case CONNECTIONS = ConnectionsClient::class;
    case CONTACTS = ContactsClient::class;
    case DEVICES = DevicesClient::class;
    case EXTENSIONS = ExtensionsClient::class;
    case FACILITIES = FacilitiesClient::class;
    case HEALTH = HealthClient::class;
    case IMPLEMENTATION = ImplementationClient::class;
    case IPS = IpsClient::class;
    case MACS = MacsClient::class;
    case MEMBER_JOINING_RULES = MemberJoiningRulesClient::class;
    case METRO_AREA_NETWORKS = MetroAreaNetworksClient::class;
    case METRO_AREAS = MetroAreasClient::class;
    case NETWORK_FEATURE_CONFIGS = NetworkFeatureConfigsClient::class;
    case NETWORK_FEATURES = NetworkFeaturesClient::class;
    case NETWORK_SERVICE_CONFIGS = NetworkServiceConfigsClient::class;
    case NETWORK_SERVICES = NetworkServicesClient::class;
    case POPS = PopsClient::class;
    case PORT_RESERVATIONS = PortReservationsClient::class;
    case PORTS = PortsClient::class;
    case PRODUCT_OFFERINGS = ProductOfferingsClient::class;
    case ROLE_ASSIGNMENTS = RoleAssignmentsClient::class;
    case ROLES = RolesClient::class;
}
