<?php
// This file was auto-generated from sdk-root/src/data/groundstation/2019-05-23/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Welcome to the AWS Ground Station API Reference. AWS Ground Station is a fully managed service that enables you to control satellite communications, downlink and process satellite data, and scale your satellite operations efficiently and cost-effectively without having to build or manage your own ground station infrastructure.</p>', 'operations' => [ 'CancelContact' => '<p>Cancels a contact with a specified contact ID.</p>', 'CreateConfig' => '<p>Creates a <code>Config</code> with the specified <code>configData</code> parameters.</p> <p>Only one type of <code>configData</code> can be specified.</p>', 'CreateDataflowEndpointGroup' => '<p>Creates a <code>DataflowEndpoint</code> group containing the specified list of <code>DataflowEndpoint</code> objects.</p> <p>The <code>name</code> field in each endpoint is used in your mission profile <code>DataflowEndpointConfig</code> to specify which endpoints to use during a contact.</p> <p>When a contact uses multiple <code>DataflowEndpointConfig</code> objects, each <code>Config</code> must match a <code>DataflowEndpoint</code> in the same group.</p>', 'CreateMissionProfile' => '<p>Creates a mission profile.</p> <p> <code>dataflowEdges</code> is a list of lists of strings. Each lower level list of strings has two elements: a <i>from</i> ARN and a <i>to</i> ARN.</p>', 'DeleteConfig' => '<p>Deletes a <code>Config</code>.</p>', 'DeleteDataflowEndpointGroup' => '<p>Deletes a dataflow endpoint group.</p>', 'DeleteMissionProfile' => '<p>Deletes a mission profile.</p>', 'DescribeContact' => '<p>Describes an existing contact.</p>', 'GetConfig' => '<p>Returns <code>Config</code> information.</p> <p>Only one <code>Config</code> response can be returned.</p>', 'GetDataflowEndpointGroup' => '<p>Returns the dataflow endpoint group.</p>', 'GetMinuteUsage' => '<p>Returns the number of minutes used by account.</p>', 'GetMissionProfile' => '<p>Returns a mission profile.</p>', 'GetSatellite' => '<p>Returns a satellite.</p>', 'ListConfigs' => '<p>Returns a list of <code>Config</code> objects.</p>', 'ListContacts' => '<p>Returns a list of contacts.</p> <p>If <code>statusList</code> contains AVAILABLE, the request must include <code>groundStation</code>, <code>missionprofileArn</code>, and <code>satelliteArn</code>. </p>', 'ListDataflowEndpointGroups' => '<p>Returns a list of <code>DataflowEndpoint</code> groups.</p>', 'ListGroundStations' => '<p>Returns a list of ground stations. </p>', 'ListMissionProfiles' => '<p>Returns a list of mission profiles.</p>', 'ListSatellites' => '<p>Returns a list of satellites.</p>', 'ListTagsForResource' => '<p>Returns a list of tags for a specified resource.</p>', 'ReserveContact' => '<p>Reserves a contact using specified parameters.</p>', 'TagResource' => '<p>Assigns a tag to a resource.</p>', 'UntagResource' => '<p>Deassigns a resource tag.</p>', 'UpdateConfig' => '<p>Updates the <code>Config</code> used when scheduling contacts.</p> <p>Updating a <code>Config</code> will not update the execution parameters for existing future contacts scheduled with this <code>Config</code>.</p>', 'UpdateMissionProfile' => '<p>Updates a mission profile.</p> <p>Updating a mission profile will not update the execution parameters for existing future contacts.</p>', ], 'shapes' => [ 'AngleUnits' => [ 'base' => NULL, 'refs' => [ 'Elevation$unit' => '<p>Elevation angle units.</p>', ], ], 'AntennaDemodDecodeDetails' => [ 'base' => '<p>Details about an antenna demod decode <code>Config</code> used in a contact.</p>', 'refs' => [ 'ConfigDetails$antennaDemodDecodeDetails' => '<p>Details for antenna demod decode <code>Config</code> in a contact.</p>', ], ], 'AntennaDownlinkConfig' => [ 'base' => '<p>Information about how AWS Ground Station should configure an antenna for downlink during a contact.</p>', 'refs' => [ 'ConfigTypeData$antennaDownlinkConfig' => '<p>Information about how AWS Ground Station should configure an antenna for downlink during a contact.</p>', ], ], 'AntennaDownlinkDemodDecodeConfig' => [ 'base' => '<p>Information about how AWS Ground Station should conﬁgure an antenna for downlink demod decode during a contact.</p>', 'refs' => [ 'ConfigTypeData$antennaDownlinkDemodDecodeConfig' => '<p>Information about how AWS Ground Station should conﬁgure an antenna for downlink demod decode during a contact.</p>', ], ], 'AntennaUplinkConfig' => [ 'base' => '<p>Information about the uplink <code>Config</code> of an antenna.</p>', 'refs' => [ 'ConfigTypeData$antennaUplinkConfig' => '<p>Information about how AWS Ground Station should conﬁgure an antenna for uplink during a contact.</p>', ], ], 'BandwidthUnits' => [ 'base' => NULL, 'refs' => [ 'FrequencyBandwidth$units' => '<p>Frequency bandwidth units.</p>', ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'AntennaUplinkConfig$transmitDisabled' => '<p>Whether or not uplink transmit is disabled.</p>', 'GetMinuteUsageResponse$isReservedMinutesCustomer' => '<p>Returns whether or not an account has signed up for the reserved minutes pricing plan, specific to the month being requested.</p>', 'UplinkEchoConfig$enabled' => '<p>Whether or not an uplink <code>Config</code> is enabled.</p>', ], ], 'BucketArn' => [ 'base' => NULL, 'refs' => [ 'S3RecordingConfig$bucketArn' => '<p>ARN of the bucket to record to.</p>', 'S3RecordingDetails$bucketArn' => '<p>ARN of the bucket used.</p>', ], ], 'CancelContactRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ConfigArn' => [ 'base' => NULL, 'refs' => [ 'ConfigIdResponse$configArn' => '<p>ARN of a <code>Config</code>.</p>', 'ConfigListItem$configArn' => '<p>ARN of a <code>Config</code>.</p>', 'CreateMissionProfileRequest$trackingConfigArn' => '<p>ARN of a tracking <code>Config</code>.</p>', 'DataflowEdge$member' => NULL, 'GetConfigResponse$configArn' => '<p>ARN of a <code>Config</code> </p>', 'GetMissionProfileResponse$trackingConfigArn' => '<p>ARN of a tracking <code>Config</code>.</p>', 'UpdateMissionProfileRequest$trackingConfigArn' => '<p>ARN of a tracking <code>Config</code>.</p>', 'UplinkEchoConfig$antennaUplinkConfigArn' => '<p>ARN of an uplink <code>Config</code>.</p>', ], ], 'ConfigCapabilityType' => [ 'base' => NULL, 'refs' => [ 'ConfigIdResponse$configType' => '<p>Type of a <code>Config</code>.</p>', 'ConfigListItem$configType' => '<p>Type of a <code>Config</code>.</p>', 'DeleteConfigRequest$configType' => '<p>Type of a <code>Config</code>.</p>', 'Destination$configType' => '<p>Type of a <code>Config</code>.</p>', 'GetConfigRequest$configType' => '<p>Type of a <code>Config</code>.</p>', 'GetConfigResponse$configType' => '<p>Type of a <code>Config</code>.</p>', 'Source$configType' => '<p>Type of a <code>Config</code>.</p>', 'UpdateConfigRequest$configType' => '<p>Type of a <code>Config</code>.</p>', ], ], 'ConfigDetails' => [ 'base' => '<p>Details for certain <code>Config</code> object types in a contact.</p>', 'refs' => [ 'Destination$configDetails' => '<p>Additional details for a <code>Config</code>, if type is dataflow endpoint or antenna demod decode.</p>', 'Source$configDetails' => '<p>Additional details for a <code>Config</code>, if type is dataflow endpoint or antenna demod decode.</p>', ], ], 'ConfigIdResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ConfigList' => [ 'base' => NULL, 'refs' => [ 'ListConfigsResponse$configList' => '<p>List of <code>Config</code> items.</p>', ], ], 'ConfigListItem' => [ 'base' => '<p>An item in a list of <code>Config</code> objects.</p>', 'refs' => [ 'ConfigList$member' => NULL, ], ], 'ConfigTypeData' => [ 'base' => '<p>Object containing the parameters of a <code>Config</code>.</p> <p>See the subtype definitions for what each type of <code>Config</code> contains.</p>', 'refs' => [ 'CreateConfigRequest$configData' => '<p>Parameters of a <code>Config</code>.</p>', 'GetConfigResponse$configData' => '<p>Data elements in a <code>Config</code>.</p>', 'UpdateConfigRequest$configData' => '<p>Parameters of a <code>Config</code>.</p>', ], ], 'ContactData' => [ 'base' => '<p>Data describing a contact.</p>', 'refs' => [ 'ContactList$member' => NULL, ], ], 'ContactIdResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ContactList' => [ 'base' => NULL, 'refs' => [ 'ListContactsResponse$contactList' => '<p>List of contacts.</p>', ], ], 'ContactStatus' => [ 'base' => NULL, 'refs' => [ 'ContactData$contactStatus' => '<p>Status of a contact.</p>', 'DescribeContactResponse$contactStatus' => '<p>Status of a contact.</p>', 'StatusList$member' => NULL, ], ], 'CreateConfigRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'CreateDataflowEndpointGroupRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'CreateMissionProfileRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'Criticality' => [ 'base' => NULL, 'refs' => [ 'TrackingConfig$autotrack' => '<p>Current setting for autotrack.</p>', ], ], 'DataflowDetail' => [ 'base' => '<p>Information about a dataflow edge used in a contact.</p>', 'refs' => [ 'DataflowList$member' => NULL, ], ], 'DataflowEdge' => [ 'base' => NULL, 'refs' => [ 'DataflowEdgeList$member' => NULL, ], ], 'DataflowEdgeList' => [ 'base' => NULL, 'refs' => [ 'CreateMissionProfileRequest$dataflowEdges' => '<p>A list of lists of ARNs. Each list of ARNs is an edge, with a <i>from</i> <code>Config</code> and a <i>to</i> <code>Config</code>.</p>', 'GetMissionProfileResponse$dataflowEdges' => '<p>A list of lists of ARNs. Each list of ARNs is an edge, with a <i>from</i> <code>Config</code> and a <i>to</i> <code>Config</code>.</p>', 'UpdateMissionProfileRequest$dataflowEdges' => '<p>A list of lists of ARNs. Each list of ARNs is an edge, with a <i>from</i> <code>Config</code> and a <i>to</i> <code>Config</code>.</p>', ], ], 'DataflowEndpoint' => [ 'base' => '<p>Information about a dataflow endpoint.</p>', 'refs' => [ 'EndpointDetails$endpoint' => '<p>A dataflow endpoint.</p>', ], ], 'DataflowEndpointConfig' => [ 'base' => '<p>Information about the dataflow endpoint <code>Config</code>.</p>', 'refs' => [ 'ConfigTypeData$dataflowEndpointConfig' => '<p>Information about the dataflow endpoint <code>Config</code>.</p>', ], ], 'DataflowEndpointGroupArn' => [ 'base' => NULL, 'refs' => [ 'DataflowEndpointListItem$dataflowEndpointGroupArn' => '<p>ARN of a dataflow endpoint group.</p>', 'GetDataflowEndpointGroupResponse$dataflowEndpointGroupArn' => '<p>ARN of a dataflow endpoint group.</p>', ], ], 'DataflowEndpointGroupIdResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'DataflowEndpointGroupList' => [ 'base' => NULL, 'refs' => [ 'ListDataflowEndpointGroupsResponse$dataflowEndpointGroupList' => '<p>A list of dataflow endpoint groups.</p>', ], ], 'DataflowEndpointListItem' => [ 'base' => '<p>Item in a list of <code>DataflowEndpoint</code> groups.</p>', 'refs' => [ 'DataflowEndpointGroupList$member' => NULL, ], ], 'DataflowEndpointMtuInteger' => [ 'base' => NULL, 'refs' => [ 'DataflowEndpoint$mtu' => '<p>Maximum transmission unit (MTU) size in bytes of a dataflow endpoint.</p>', ], ], 'DataflowList' => [ 'base' => NULL, 'refs' => [ 'DescribeContactResponse$dataflowList' => '<p>List describing source and destination details for each dataflow edge.</p>', ], ], 'DecodeConfig' => [ 'base' => '<p>Information about the decode <code>Config</code>.</p>', 'refs' => [ 'AntennaDownlinkDemodDecodeConfig$decodeConfig' => '<p>Information about the decode <code>Config</code>.</p>', ], ], 'DeleteConfigRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'DeleteDataflowEndpointGroupRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'DeleteMissionProfileRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'DemodulationConfig' => [ 'base' => '<p>Information about the demodulation <code>Config</code>.</p>', 'refs' => [ 'AntennaDownlinkDemodDecodeConfig$demodulationConfig' => '<p>Information about the demodulation <code>Config</code>.</p>', ], ], 'DependencyException' => [ 'base' => '<p>Dependency encountered an error.</p>', 'refs' => [], ], 'DescribeContactRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'DescribeContactResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'Destination' => [ 'base' => '<p>Dataflow details for the destination side.</p>', 'refs' => [ 'DataflowDetail$destination' => NULL, ], ], 'Double' => [ 'base' => NULL, 'refs' => [ 'Eirp$value' => '<p>Value of an EIRP. Valid values are between 20.0 to 50.0 dBW.</p>', 'Elevation$value' => '<p>Elevation angle value.</p>', 'Frequency$value' => '<p>Frequency value. Valid values are between 2200 to 2300 MHz and 7750 to 8400 MHz for downlink and 2025 to 2120 MHz for uplink.</p>', 'FrequencyBandwidth$value' => '<p>Frequency bandwidth value. AWS Ground Station currently has the following bandwidth limitations:</p> <ul> <li> <p>For <code>AntennaDownlinkDemodDecodeconfig</code>, valid values are between 125 kHz to 650 MHz.</p> </li> <li> <p>For <code>AntennaDownlinkconfig</code>, valid values are between 10 kHz to 54 MHz.</p> </li> <li> <p>For <code>AntennaUplinkConfig</code>, valid values are between 10 kHz to 54 MHz.</p> </li> </ul>', ], ], 'DurationInSeconds' => [ 'base' => NULL, 'refs' => [ 'CreateMissionProfileRequest$contactPostPassDurationSeconds' => '<p>Amount of time after a contact ends that you’d like to receive a CloudWatch event indicating the pass has finished.</p>', 'CreateMissionProfileRequest$contactPrePassDurationSeconds' => '<p>Amount of time prior to contact start you’d like to receive a CloudWatch event indicating an upcoming pass.</p>', 'CreateMissionProfileRequest$minimumViableContactDurationSeconds' => '<p>Smallest amount of time in seconds that you’d like to see for an available contact. AWS Ground Station will not present you with contacts shorter than this duration.</p>', 'GetMissionProfileResponse$contactPostPassDurationSeconds' => '<p>Amount of time after a contact ends that you’d like to receive a CloudWatch event indicating the pass has finished.</p>', 'GetMissionProfileResponse$contactPrePassDurationSeconds' => '<p>Amount of time prior to contact start you’d like to receive a CloudWatch event indicating an upcoming pass.</p>', 'GetMissionProfileResponse$minimumViableContactDurationSeconds' => '<p>Smallest amount of time in seconds that you’d like to see for an available contact. AWS Ground Station will not present you with contacts shorter than this duration.</p>', 'UpdateMissionProfileRequest$contactPostPassDurationSeconds' => '<p>Amount of time after a contact ends that you’d like to receive a CloudWatch event indicating the pass has finished.</p>', 'UpdateMissionProfileRequest$contactPrePassDurationSeconds' => '<p>Amount of time after a contact ends that you’d like to receive a CloudWatch event indicating the pass has finished.</p>', 'UpdateMissionProfileRequest$minimumViableContactDurationSeconds' => '<p>Smallest amount of time in seconds that you’d like to see for an available contact. AWS Ground Station will not present you with contacts shorter than this duration.</p>', ], ], 'Eirp' => [ 'base' => '<p>Object that represents EIRP.</p>', 'refs' => [ 'AntennaUplinkConfig$targetEirp' => '<p>EIRP of the target.</p>', ], ], 'EirpUnits' => [ 'base' => NULL, 'refs' => [ 'Eirp$units' => '<p>Units of an EIRP.</p>', ], ], 'Elevation' => [ 'base' => '<p>Elevation angle of the satellite in the sky during a contact.</p>', 'refs' => [ 'ContactData$maximumElevation' => '<p>Maximum elevation angle of a contact.</p>', 'DescribeContactResponse$maximumElevation' => '<p>Maximum elevation angle of a contact.</p>', ], ], 'EndpointDetails' => [ 'base' => '<p>Information about the endpoint details.</p>', 'refs' => [ 'ConfigDetails$endpointDetails' => NULL, 'EndpointDetailsList$member' => NULL, ], ], 'EndpointDetailsList' => [ 'base' => NULL, 'refs' => [ 'CreateDataflowEndpointGroupRequest$endpointDetails' => '<p>Endpoint details of each endpoint in the dataflow endpoint group.</p>', 'GetDataflowEndpointGroupResponse$endpointsDetails' => '<p>Details of a dataflow endpoint.</p>', ], ], 'EndpointStatus' => [ 'base' => NULL, 'refs' => [ 'DataflowEndpoint$status' => '<p>Status of a dataflow endpoint.</p>', ], ], 'Frequency' => [ 'base' => '<p>Object that describes the frequency.</p>', 'refs' => [ 'SpectrumConfig$centerFrequency' => '<p>Center frequency of a spectral <code>Config</code>. Valid values are between 2200 to 2300 MHz and 7750 to 8400 MHz for downlink and 2025 to 2120 MHz for uplink.</p>', 'UplinkSpectrumConfig$centerFrequency' => '<p>Center frequency of an uplink spectral <code>Config</code>. Valid values are between 2025 to 2120 MHz.</p>', ], ], 'FrequencyBandwidth' => [ 'base' => '<p>Object that describes the frequency bandwidth. </p>', 'refs' => [ 'SpectrumConfig$bandwidth' => '<p>Bandwidth of a spectral <code>Config</code>. AWS Ground Station currently has the following bandwidth limitations:</p> <ul> <li> <p>For <code>AntennaDownlinkDemodDecodeconfig</code>, valid values are between 125 kHz to 650 MHz.</p> </li> <li> <p>For <code>AntennaDownlinkconfig</code> valid values are between 10 kHz to 54 MHz.</p> </li> <li> <p>For <code>AntennaUplinkConfig</code>, valid values are between 10 kHz to 54 MHz.</p> </li> </ul>', ], ], 'FrequencyUnits' => [ 'base' => NULL, 'refs' => [ 'Frequency$units' => '<p>Frequency units.</p>', ], ], 'GetConfigRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'GetConfigResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'GetDataflowEndpointGroupRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'GetDataflowEndpointGroupResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'GetMinuteUsageRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'GetMinuteUsageResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'GetMissionProfileRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'GetMissionProfileResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'GetSatelliteRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'GetSatelliteResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'GroundStationData' => [ 'base' => '<p>Information about the ground station data.</p>', 'refs' => [ 'GroundStationList$member' => NULL, ], ], 'GroundStationIdList' => [ 'base' => NULL, 'refs' => [ 'GetSatelliteResponse$groundStations' => '<p>A list of ground stations to which the satellite is on-boarded.</p>', 'SatelliteListItem$groundStations' => '<p>A list of ground stations to which the satellite is on-boarded.</p>', ], ], 'GroundStationList' => [ 'base' => NULL, 'refs' => [ 'ListGroundStationsResponse$groundStationList' => '<p>List of ground stations.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'GetMinuteUsageRequest$month' => '<p>The month being requested, with a value of 1-12.</p>', 'GetMinuteUsageRequest$year' => '<p>The year being requested, in the format of YYYY.</p>', 'GetMinuteUsageResponse$estimatedMinutesRemaining' => '<p>Estimated number of minutes remaining for an account, specific to the month being requested.</p>', 'GetMinuteUsageResponse$totalReservedMinuteAllocation' => '<p>Total number of reserved minutes allocated, specific to the month being requested.</p>', 'GetMinuteUsageResponse$totalScheduledMinutes' => '<p>Total scheduled minutes for an account, specific to the month being requested.</p>', 'GetMinuteUsageResponse$upcomingMinutesScheduled' => '<p>Upcoming minutes scheduled for an account, specific to the month being requested.</p>', 'ListConfigsRequest$maxResults' => '<p>Maximum number of <code>Configs</code> returned.</p>', 'ListContactsRequest$maxResults' => '<p>Maximum number of contacts returned.</p>', 'ListDataflowEndpointGroupsRequest$maxResults' => '<p>Maximum number of dataflow endpoint groups returned.</p>', 'ListGroundStationsRequest$maxResults' => '<p>Maximum number of ground stations returned.</p>', 'ListMissionProfilesRequest$maxResults' => '<p>Maximum number of mission profiles returned.</p>', 'ListSatellitesRequest$maxResults' => '<p>Maximum number of satellites returned.</p>', 'SocketAddress$port' => '<p>Port of a socket address.</p>', ], ], 'InvalidParameterException' => [ 'base' => '<p>One or more parameters are not valid.</p>', 'refs' => [], ], 'JsonString' => [ 'base' => NULL, 'refs' => [ 'DecodeConfig$unvalidatedJSON' => '<p>Unvalidated JSON of a decode <code>Config</code>.</p>', 'DemodulationConfig$unvalidatedJSON' => '<p>Unvalidated JSON of a demodulation <code>Config</code>.</p>', ], ], 'ListConfigsRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ListConfigsResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ListContactsRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ListContactsResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ListDataflowEndpointGroupsRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ListDataflowEndpointGroupsResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ListGroundStationsRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ListGroundStationsResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ListMissionProfilesRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ListMissionProfilesResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ListSatellitesRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ListSatellitesResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'MissionProfileArn' => [ 'base' => NULL, 'refs' => [ 'ContactData$missionProfileArn' => '<p>ARN of a mission profile.</p>', 'DescribeContactResponse$missionProfileArn' => '<p>ARN of a mission profile.</p>', 'GetMissionProfileResponse$missionProfileArn' => '<p>ARN of a mission profile.</p>', 'ListContactsRequest$missionProfileArn' => '<p>ARN of a mission profile.</p>', 'MissionProfileListItem$missionProfileArn' => '<p>ARN of a mission profile.</p>', 'ReserveContactRequest$missionProfileArn' => '<p>ARN of a mission profile.</p>', ], ], 'MissionProfileIdResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'MissionProfileList' => [ 'base' => NULL, 'refs' => [ 'ListMissionProfilesResponse$missionProfileList' => '<p>List of mission profiles.</p>', ], ], 'MissionProfileListItem' => [ 'base' => '<p>Item in a list of mission profiles.</p>', 'refs' => [ 'MissionProfileList$member' => NULL, ], ], 'Polarization' => [ 'base' => NULL, 'refs' => [ 'SpectrumConfig$polarization' => '<p>Polarization of a spectral <code>Config</code>. Capturing both <code>"RIGHT_HAND"</code> and <code>"LEFT_HAND"</code> polarization requires two separate configs.</p>', 'UplinkSpectrumConfig$polarization' => '<p>Polarization of an uplink spectral <code>Config</code>. Capturing both <code>"RIGHT_HAND"</code> and <code>"LEFT_HAND"</code> polarization requires two separate configs.</p>', ], ], 'ReserveContactRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'ResourceLimitExceededException' => [ 'base' => '<p>Account limits for this resource have been exceeded.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>Resource was not found.</p>', 'refs' => [], ], 'RoleArn' => [ 'base' => NULL, 'refs' => [ 'S3RecordingConfig$roleArn' => '<p>ARN of the role Ground Station assumes to write data to the bucket.</p>', 'SecurityDetails$roleArn' => '<p>ARN to a role needed for connecting streams to your instances. </p>', ], ], 'S3KeyPrefix' => [ 'base' => NULL, 'refs' => [ 'S3RecordingConfig$prefix' => '<p>S3 Key prefix to prefice data files.</p>', ], ], 'S3RecordingConfig' => [ 'base' => '<p>Information about an S3 recording <code>Config</code>.</p>', 'refs' => [ 'ConfigTypeData$s3RecordingConfig' => '<p>Information about an S3 recording <code>Config</code>.</p>', ], ], 'S3RecordingDetails' => [ 'base' => '<p>Details about an S3 recording <code>Config</code> used in a contact.</p>', 'refs' => [ 'ConfigDetails$s3RecordingDetails' => '<p>Details for an S3 recording <code>Config</code> in a contact.</p>', ], ], 'SafeName' => [ 'base' => NULL, 'refs' => [ 'CreateConfigRequest$name' => '<p>Name of a <code>Config</code>.</p>', 'CreateMissionProfileRequest$name' => '<p>Name of a mission profile.</p>', 'DataflowEndpoint$name' => '<p>Name of a dataflow endpoint.</p>', 'UpdateConfigRequest$name' => '<p>Name of a <code>Config</code>.</p>', 'UpdateMissionProfileRequest$name' => '<p>Name of a mission profile.</p>', ], ], 'SatelliteList' => [ 'base' => NULL, 'refs' => [ 'ListSatellitesResponse$satellites' => '<p>List of satellites.</p>', ], ], 'SatelliteListItem' => [ 'base' => '<p>Item in a list of satellites.</p>', 'refs' => [ 'SatelliteList$member' => NULL, ], ], 'SecurityDetails' => [ 'base' => '<p>Information about endpoints.</p>', 'refs' => [ 'EndpointDetails$securityDetails' => '<p>Endpoint security details.</p>', ], ], 'SecurityGroupIdList' => [ 'base' => NULL, 'refs' => [ 'SecurityDetails$securityGroupIds' => '<p>The security groups to attach to the elastic network interfaces.</p>', ], ], 'SocketAddress' => [ 'base' => '<p>Information about the socket address.</p>', 'refs' => [ 'DataflowEndpoint$address' => '<p>Socket address of a dataflow endpoint.</p>', ], ], 'Source' => [ 'base' => '<p>Dataflow details for the source side.</p>', 'refs' => [ 'DataflowDetail$source' => NULL, ], ], 'SpectrumConfig' => [ 'base' => '<p>Object that describes a spectral <code>Config</code>.</p>', 'refs' => [ 'AntennaDownlinkConfig$spectrumConfig' => '<p>Object that describes a spectral <code>Config</code>.</p>', 'AntennaDownlinkDemodDecodeConfig$spectrumConfig' => '<p>Information about the spectral <code>Config</code>.</p>', ], ], 'StatusList' => [ 'base' => NULL, 'refs' => [ 'ListContactsRequest$statusList' => '<p>Status of a contact reservation.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AntennaDemodDecodeDetails$outputNode' => '<p>Name of an antenna demod decode output node used in a contact.</p>', 'CancelContactRequest$contactId' => '<p>UUID of a contact.</p>', 'ConfigIdResponse$configId' => '<p>UUID of a <code>Config</code>.</p>', 'ConfigListItem$configId' => '<p>UUID of a <code>Config</code>.</p>', 'ConfigListItem$name' => '<p>Name of a <code>Config</code>.</p>', 'ContactData$contactId' => '<p>UUID of a contact.</p>', 'ContactData$errorMessage' => '<p>Error message of a contact.</p>', 'ContactData$groundStation' => '<p>Name of a ground station.</p>', 'ContactData$region' => '<p>Region of a contact.</p>', 'ContactIdResponse$contactId' => '<p>UUID of a contact.</p>', 'DataflowDetail$errorMessage' => '<p>Error message for a dataflow.</p>', 'DataflowEndpointConfig$dataflowEndpointName' => '<p>Name of a dataflow endpoint.</p>', 'DataflowEndpointConfig$dataflowEndpointRegion' => '<p>Region of a dataflow endpoint.</p>', 'DataflowEndpointGroupIdResponse$dataflowEndpointGroupId' => '<p>UUID of a dataflow endpoint group.</p>', 'DataflowEndpointListItem$dataflowEndpointGroupId' => '<p>UUID of a dataflow endpoint group.</p>', 'DeleteConfigRequest$configId' => '<p>UUID of a <code>Config</code>.</p>', 'DeleteDataflowEndpointGroupRequest$dataflowEndpointGroupId' => '<p>UUID of a dataflow endpoint group.</p>', 'DeleteMissionProfileRequest$missionProfileId' => '<p>UUID of a mission profile.</p>', 'DependencyException$message' => NULL, 'DependencyException$parameterName' => '<p/>', 'DescribeContactRequest$contactId' => '<p>UUID of a contact.</p>', 'DescribeContactResponse$contactId' => '<p>UUID of a contact.</p>', 'DescribeContactResponse$errorMessage' => '<p>Error message for a contact.</p>', 'DescribeContactResponse$groundStation' => '<p>Ground station for a contact.</p>', 'DescribeContactResponse$region' => '<p>Region of a contact.</p>', 'Destination$configId' => '<p>UUID of a <code>Config</code>.</p>', 'Destination$dataflowDestinationRegion' => '<p>Region of a dataflow destination.</p>', 'GetConfigRequest$configId' => '<p>UUID of a <code>Config</code>.</p>', 'GetConfigResponse$configId' => '<p>UUID of a <code>Config</code>.</p>', 'GetConfigResponse$name' => '<p>Name of a <code>Config</code>.</p>', 'GetDataflowEndpointGroupRequest$dataflowEndpointGroupId' => '<p>UUID of a dataflow endpoint group.</p>', 'GetDataflowEndpointGroupResponse$dataflowEndpointGroupId' => '<p>UUID of a dataflow endpoint group.</p>', 'GetMissionProfileRequest$missionProfileId' => '<p>UUID of a mission profile.</p>', 'GetMissionProfileResponse$missionProfileId' => '<p>UUID of a mission profile.</p>', 'GetMissionProfileResponse$name' => '<p>Name of a mission profile.</p>', 'GetMissionProfileResponse$region' => '<p>Region of a mission profile.</p>', 'GetSatelliteRequest$satelliteId' => '<p>UUID of a satellite.</p>', 'GroundStationData$groundStationId' => '<p>UUID of a ground station.</p>', 'GroundStationData$groundStationName' => '<p>Name of a ground station.</p>', 'GroundStationData$region' => '<p>Ground station Region.</p>', 'GroundStationIdList$member' => NULL, 'InvalidParameterException$message' => NULL, 'InvalidParameterException$parameterName' => '<p/>', 'ListConfigsRequest$nextToken' => '<p>Next token returned in the request of a previous <code>ListConfigs</code> call. Used to get the next page of results.</p>', 'ListConfigsResponse$nextToken' => '<p>Next token returned in the response of a previous <code>ListConfigs</code> call. Used to get the next page of results.</p>', 'ListContactsRequest$groundStation' => '<p>Name of a ground station.</p>', 'ListContactsRequest$nextToken' => '<p>Next token returned in the request of a previous <code>ListContacts</code> call. Used to get the next page of results.</p>', 'ListContactsResponse$nextToken' => '<p>Next token returned in the response of a previous <code>ListContacts</code> call. Used to get the next page of results.</p>', 'ListDataflowEndpointGroupsRequest$nextToken' => '<p>Next token returned in the request of a previous <code>ListDataflowEndpointGroups</code> call. Used to get the next page of results.</p>', 'ListDataflowEndpointGroupsResponse$nextToken' => '<p>Next token returned in the response of a previous <code>ListDataflowEndpointGroups</code> call. Used to get the next page of results.</p>', 'ListGroundStationsRequest$nextToken' => '<p>Next token that can be supplied in the next call to get the next page of ground stations.</p>', 'ListGroundStationsRequest$satelliteId' => '<p>Satellite ID to retrieve on-boarded ground stations.</p>', 'ListGroundStationsResponse$nextToken' => '<p>Next token that can be supplied in the next call to get the next page of ground stations.</p>', 'ListMissionProfilesRequest$nextToken' => '<p>Next token returned in the request of a previous <code>ListMissionProfiles</code> call. Used to get the next page of results.</p>', 'ListMissionProfilesResponse$nextToken' => '<p>Next token returned in the response of a previous <code>ListMissionProfiles</code> call. Used to get the next page of results.</p>', 'ListSatellitesRequest$nextToken' => '<p>Next token that can be supplied in the next call to get the next page of satellites.</p>', 'ListSatellitesResponse$nextToken' => '<p>Next token that can be supplied in the next call to get the next page of satellites.</p>', 'ListTagsForResourceRequest$resourceArn' => '<p>ARN of a resource.</p>', 'MissionProfileIdResponse$missionProfileId' => '<p>UUID of a mission profile.</p>', 'MissionProfileListItem$missionProfileId' => '<p>UUID of a mission profile.</p>', 'MissionProfileListItem$name' => '<p>Name of a mission profile.</p>', 'MissionProfileListItem$region' => '<p>Region of a mission profile.</p>', 'ReserveContactRequest$groundStation' => '<p>Name of a ground station.</p>', 'ResourceLimitExceededException$message' => NULL, 'ResourceLimitExceededException$parameterName' => '<p/>', 'ResourceNotFoundException$message' => NULL, 'S3RecordingDetails$keyTemplate' => '<p>Template of the S3 key used.</p>', 'SecurityGroupIdList$member' => NULL, 'SocketAddress$name' => '<p>Name of a socket address.</p>', 'Source$configId' => '<p>UUID of a <code>Config</code>.</p>', 'Source$dataflowSourceRegion' => '<p>Region of a dataflow source.</p>', 'SubnetList$member' => NULL, 'TagKeys$member' => NULL, 'TagResourceRequest$resourceArn' => '<p>ARN of a resource tag.</p>', 'TagsMap$key' => NULL, 'TagsMap$value' => NULL, 'UntagResourceRequest$resourceArn' => '<p>ARN of a resource.</p>', 'UpdateConfigRequest$configId' => '<p>UUID of a <code>Config</code>.</p>', 'UpdateMissionProfileRequest$missionProfileId' => '<p>UUID of a mission profile.</p>', ], ], 'SubnetList' => [ 'base' => NULL, 'refs' => [ 'SecurityDetails$subnetIds' => '<p>A list of subnets where AWS Ground Station places elastic network interfaces to send streams to your instances.</p>', ], ], 'TagKeys' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>Keys of a resource tag.</p>', ], ], 'TagResourceRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'TagResourceResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'TagsMap' => [ 'base' => NULL, 'refs' => [ 'ContactData$tags' => '<p>Tags assigned to a contact.</p>', 'CreateConfigRequest$tags' => '<p>Tags assigned to a <code>Config</code>.</p>', 'CreateDataflowEndpointGroupRequest$tags' => '<p>Tags of a dataflow endpoint group.</p>', 'CreateMissionProfileRequest$tags' => '<p>Tags assigned to a mission profile.</p>', 'DescribeContactResponse$tags' => '<p>Tags assigned to a contact.</p>', 'GetConfigResponse$tags' => '<p>Tags assigned to a <code>Config</code>.</p>', 'GetDataflowEndpointGroupResponse$tags' => '<p>Tags assigned to a dataflow endpoint group.</p>', 'GetMissionProfileResponse$tags' => '<p>Tags assigned to a mission profile.</p>', 'ListTagsForResourceResponse$tags' => '<p>Tags assigned to a resource.</p>', 'ReserveContactRequest$tags' => '<p>Tags assigned to a contact.</p>', 'TagResourceRequest$tags' => '<p>Tags assigned to a resource.</p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'ContactData$endTime' => '<p>End time of a contact.</p>', 'ContactData$postPassEndTime' => '<p>Amount of time after a contact ends that you’d like to receive a CloudWatch event indicating the pass has finished.</p>', 'ContactData$prePassStartTime' => '<p>Amount of time prior to contact start you’d like to receive a CloudWatch event indicating an upcoming pass.</p>', 'ContactData$startTime' => '<p>Start time of a contact.</p>', 'DescribeContactResponse$endTime' => '<p>End time of a contact.</p>', 'DescribeContactResponse$postPassEndTime' => '<p>Amount of time after a contact ends that you’d like to receive a CloudWatch event indicating the pass has finished.</p>', 'DescribeContactResponse$prePassStartTime' => '<p>Amount of time prior to contact start you’d like to receive a CloudWatch event indicating an upcoming pass.</p>', 'DescribeContactResponse$startTime' => '<p>Start time of a contact.</p>', 'ListContactsRequest$endTime' => '<p>End time of a contact.</p>', 'ListContactsRequest$startTime' => '<p>Start time of a contact.</p>', 'ReserveContactRequest$endTime' => '<p>End time of a contact.</p>', 'ReserveContactRequest$startTime' => '<p>Start time of a contact.</p>', ], ], 'TrackingConfig' => [ 'base' => '<p>Object that determines whether tracking should be used during a contact executed with this <code>Config</code> in the mission profile.</p>', 'refs' => [ 'ConfigTypeData$trackingConfig' => '<p>Object that determines whether tracking should be used during a contact executed with this <code>Config</code> in the mission profile. </p>', ], ], 'UntagResourceRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => '<p/>', 'refs' => [], ], 'UpdateConfigRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'UpdateMissionProfileRequest' => [ 'base' => '<p/>', 'refs' => [], ], 'UplinkEchoConfig' => [ 'base' => '<p>Information about an uplink echo <code>Config</code>.</p> <p>Parameters from the <code>AntennaUplinkConfig</code>, corresponding to the specified <code>AntennaUplinkConfigArn</code>, are used when this <code>UplinkEchoConfig</code> is used in a contact.</p>', 'refs' => [ 'ConfigTypeData$uplinkEchoConfig' => '<p>Information about an uplink echo <code>Config</code>.</p> <p>Parameters from the <code>AntennaUplinkConfig</code>, corresponding to the specified <code>AntennaUplinkConfigArn</code>, are used when this <code>UplinkEchoConfig</code> is used in a contact.</p>', ], ], 'UplinkSpectrumConfig' => [ 'base' => '<p>Information about the uplink spectral <code>Config</code>.</p>', 'refs' => [ 'AntennaUplinkConfig$spectrumConfig' => '<p>Information about the uplink spectral <code>Config</code>.</p>', ], ], 'Uuid' => [ 'base' => NULL, 'refs' => [ 'GetSatelliteResponse$satelliteId' => '<p>UUID of a satellite.</p>', 'SatelliteListItem$satelliteId' => '<p>UUID of a satellite.</p>', ], ], 'noradSatelliteID' => [ 'base' => NULL, 'refs' => [ 'GetSatelliteResponse$noradSatelliteID' => '<p>NORAD satellite ID number.</p>', 'SatelliteListItem$noradSatelliteID' => '<p>NORAD satellite ID number.</p>', ], ], 'satelliteArn' => [ 'base' => NULL, 'refs' => [ 'ContactData$satelliteArn' => '<p>ARN of a satellite.</p>', 'DescribeContactResponse$satelliteArn' => '<p>ARN of a satellite.</p>', 'GetSatelliteResponse$satelliteArn' => '<p>ARN of a satellite.</p>', 'ListContactsRequest$satelliteArn' => '<p>ARN of a satellite.</p>', 'ReserveContactRequest$satelliteArn' => '<p>ARN of a satellite</p>', 'SatelliteListItem$satelliteArn' => '<p>ARN of a satellite.</p>', ], ], ],];
